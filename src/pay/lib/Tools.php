<?php
namespace panthsoni\alibaba\pay\lib;

use panthsoni\alibaba\common\CommonTools;

class Tools extends CommonTools
{
    public function __construct(){
        parent::__construct();
    }

    /**
     * 组建请求参数
     * @param $data
     * @param $gatewayUrl
     * @param bool $isBackUrl
     * @param bool $isSign
     * @return string
     */
    public static function buildRequest($data,$gatewayUrl,$isBackUrl=true,$isSign=true){
        if ($isSign) $data['sign'] = self::createSign($data);

        /*组建参数*/
        if ($isBackUrl){
            $res = $gatewayUrl.self::formatBizQueryParaMap($data,true);
        }else{
            $res = '';
        }

        return $res;
    }

    /**
     * 生成签名
     * @param $data
     * @return string
     */
    protected static function createSign($data){
        $requestParams = '';
        if (is_array( $data )) $requestParams = self::formatBizQueryParaMap($data);
        $privateKey = self::checkRsaPrivateKey($data['private_key']);

        // 签名
        $signature = '';
        if("RSA2"== $data['sign_type']){
            openssl_sign($requestParams, $signature, $privateKey, OPENSSL_ALGO_SHA256 );
        }else{
            openssl_sign($requestParams, $signature, $privateKey, OPENSSL_ALGO_SHA1 );
        }

        return base64_encode( $signature);
    }

    /**
     * 格式化参数，签名过程需要使用
     * @param $paraMap
     * @param bool $urlEncode
     * @param array $except
     * @return bool|string
     */
    protected static function formatBizQueryParaMap($paraMap,$urlEncode=false,$except=['private_key','public_key']){
        $buff = "";
        ksort($paraMap);
        foreach ($paraMap as $k => $v) {
            if (!in_array( $k, $except )){
                if($urlEncode) $v = urlencode($v);
                $buff .= "&{$k }={$v }";
            }
        }
        $reqPar='';
        if (strlen($buff) > 0) $reqPar = substr($buff, 1);

        return $reqPar;
    }

    /**
     * 检查签名的格式
     * @param $privateKey
     * @return string
     */
    protected static function checkRsaPrivateKey($privateKey){
        $privateKey = chunk_split($privateKey,64,"\n");
        return "-----BEGIN RSA PRIVATE KEY-----\n$privateKey-----END RSA PRIVATE KEY-----\n";
    }
}