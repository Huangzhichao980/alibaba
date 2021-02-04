<?php


namespace panthsoni\alibaba\common;


class CommonCrypt
{
    /**
     * error code 说明.
     * <ul>
     *    <li>-900004: encodingAesKey 非法</li>
     *    <li>-900005: 签名验证错误</li>
     *    <li>-900006: sha加密生成签名失败</li>
     *    <li>-900007: aes 加密失败</li>
     *    <li>-900008: aes 解密失败</li>
     *    <li>-900010: suiteKey 校验错误</li>
     * </ul>
     */
    protected static $OK = 0;
    protected static $IllegalAesKey = 900004;
    protected static $ValidateSignatureError = 900005;
    protected static $ComputeSignatureError = 900006;
    protected static $EncryptAESError = 900007;
    protected static $DecryptAESError = 900008;
    protected static $ValidateSuiteKeyError = 900010;
    protected static $block_size = 32;
    protected static $m_token;
    protected static $m_encodingAesKey;
    protected static $m_suiteKey;
    protected static $key;

    public function __construct($token, $encodingAesKey, $suiteKey){
        self::$m_token = $token;
        self::$m_encodingAesKey = $encodingAesKey;
        self::$m_suiteKey = $suiteKey;
        self::$key = base64_decode($encodingAesKey.'=');
    }

    /**
     * 消息加密
     * @param $plain
     * @param $timeStamp
     * @param $nonce
     * @param $encryptMsg
     * @return int|mixed
     */
    public function EncryptMsg($plain, $timeStamp, $nonce, &$encryptMsg){
        $array = self::encrypt($plain, self::$m_suiteKey);
        $ret = $array[0];
        if ($ret != 0) {
            return $ret;
        }

        if ($timeStamp == null) {
            $timeStamp = time();
        }
        $encrypt = $array[1];

        $array = self::getSHA1(self::$m_token, $timeStamp, $nonce, $encrypt);
        $ret = $array[0];
        if ($ret != 0) {
            return $ret;
        }
        $signature = $array[1];

        $encryptMsg = [
            "msg_signature" => $signature,
            "encrypt" => $encrypt,
            "timeStamp" => $timeStamp,
            "nonce" => $nonce
        ];

        return self::$OK;
    }

    /**
     * 消息解密
     * @param $signature
     * @param null $timeStamp
     * @param $nonce
     * @param $encrypt
     * @param $decryptMsg
     * @return int|mixed
     */
    public function DecryptMsg($signature, $timeStamp = null, $nonce, $encrypt, &$decryptMsg){
        if (strlen(self::$m_encodingAesKey) != 43) {
            return self::$IllegalAesKey;
        }

        if ($timeStamp == null) {
            $timeStamp = time();
        }

        $array = self::getSHA1(self::$m_token, $timeStamp, $nonce, $encrypt);
        $ret = $array[0];
        if ($ret != 0) {
            return $ret;
        }

        $verifySignature = $array[1];
        if ($verifySignature != $signature) {
            return self::$ValidateSignatureError;
        }

        $result = self::decrypt($encrypt, self::$m_suiteKey);
        if ($result[0] != 0) {
            return $result[0];
        }

        $decryptMsg = $result[1];

        return self::$OK;
    }

    /**
     * 字符串encode
     * @param $text
     * @return string
     */
    protected static function encode($text){
        $text_length = strlen($text);
        $amount_to_pad = self::$block_size - ($text_length % self::$block_size);
        if ($amount_to_pad == 0) {
            $amount_to_pad = self::$block_size;
        }
        $pad_chr = chr($amount_to_pad);
        $tmp = "";
        for ($index = 0; $index < $amount_to_pad; $index++) {
            $tmp .= $pad_chr;
        }
        return $text . $tmp;
    }

    /**
     * 字符串decode
     * @param $text
     * @return false|string
     */
    protected static function decode($text){
        $pad = ord(substr($text, -1));
        if ($pad < 1 || $pad > self::$block_size) {
            $pad = 0;
        }
        return substr($text, 0, (strlen($text) - $pad));
    }

    /**
     * 消息加密处理
     * @param $text
     * @param $corpid
     * @return array
     */
    protected static function encrypt($text, $corpid){
        try {
            //获得16位随机字符串，填充到明文之前
            $random = self::getRandomStr();
            $text = $random . pack("N", strlen($text)) . $text . $corpid;
            // 网络字节序
            $iv = substr(self::$key, 0, 16);
            //使用自定义的填充方式对明文进行补位填充
            $text = self::encode($text);
            $encrypted = openssl_encrypt($text,'AES-256-CBC',self::$key,OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING,$iv);

            //print(base64_encode($encrypted));
            //使用BASE64对加密后的字符串进行编码
            return array(self::$OK, base64_encode($encrypted));
        } catch (\Exception $e) {
            print $e;
            return array(self::$EncryptAESError, null);
        }
    }

    /**
     * 消息解密处理
     * @param $encrypted
     * @param $corpid
     * @return array|string
     */
    protected static function decrypt($encrypted, $corpid){
        try {
            $ciphertext_dec = base64_decode($encrypted);
            $iv = substr(self::$key, 0, 16);
            //使用BASE64对需要解密的字符串进行解码
            $decrypted = openssl_decrypt($ciphertext_dec,'AES-256-CBC',self::$key,OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING,$iv);
        } catch (\Exception $e) {
            return array(self::$DecryptAESError, null);
        }

        try {
            //去除补位字符
            $result = self::decode($decrypted);

            //去除16位随机字符串,网络字节序和AppId
            if (strlen($result) < 16)
                return "";
            $content = substr($result, 16, strlen($result));
            $len_list = unpack("N", substr($content, 0, 4));
            $xml_len = $len_list[1];
            $xml_content = substr($content, 4, $xml_len);
            $from_corpid = substr($content, $xml_len + 4);
        } catch (\Exception $e) {
            print $e;
            return array(self::$DecryptAESError, null);
        }

        if ($from_corpid != $corpid)
            return array(self::$ValidateSuiteKeyError, null);
        return array(0, $xml_content);
    }

    /**
     * 获取随机字符串
     * @return string
     */
    protected static function getRandomStr(){
        $str = "";
        $str_pol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($str_pol) - 1;
        for ($i = 0; $i < 16; $i++) {
            $str .= $str_pol[mt_rand(0, $max)];
        }
        return $str;
    }

    /**
     * 获取sha1加密串
     * @param $token
     * @param $timestamp
     * @param $nonce
     * @param $encrypt_msg
     * @return array
     */
    protected static function getSHA1($token, $timestamp, $nonce, $encrypt_msg){
        try {
            $array = array($encrypt_msg, $token, $timestamp, $nonce);
            sort($array, SORT_STRING);
            $str = implode($array);
            return array(self::$OK, sha1($str));
        } catch (\Exception $e) {
            print $e . "\n";
            return array(self::$ComputeSignatureError, null);
        }
    }
}