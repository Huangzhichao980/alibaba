<?php
namespace panthsoni\alibaba\top\lib;

use panthsoni\alibaba\common\CommonTools;

class Tools extends CommonTools
{
    public function __construct(){
        parent::__construct();
    }

    /**
     * 组建请求
     * @param $url
     * @param $requestParams
     * @param $secret
     * @param bool $isBackUrl
     * @param string $method
     * @param string $request
     * @return bool|mixed|string
     * @throws \Exception
     */
    public static function buildRequest($url,$requestParams,$secret,$isBackUrl=false,$method='',$request='GET'){
        /*签名*/
        if ($method!=='web_server_authorize' && $method!=='client_server_authorize'){
            $requestParams['sign'] = self::makeSign($requestParams,$secret);
        }

        /*是否返回链接*/
        if ($isBackUrl) return self::buildGetUrl($url,$requestParams);
        $url = $request=='GET'?self::buildGetUrl($url,$requestParams):$url;

        return self::httpCurl($url,$request,$requestParams);
    }

    /**
     * 签名
     * @param $requestParams
     * @param $secret
     * @return string
     */
    protected static function makeSign($requestParams,$secret){
        /*处理参数*/
        $arrayKey = [];
        foreach ($requestParams as $key=>$val){
            $arrayKey[] = $key;
        }

        /*将参数按字典排序*/
        sort($arrayKey,SORT_STRING);

        /*重新构建数组*/
        $arrayValue = [];
        foreach ($arrayKey as $val){
            $arrayValue[$val] = $requestParams[$val];
        }

        /*将排序好的参数的键值和值进行拼接*/
        $string = '';
        foreach ($arrayValue as $key=>$val){
            $string .= $key.$val;
        }

        /*签名*/
        if ($requestParams['sign_method'] == 'md5'){
            $sign = strtoupper(md5($secret.$string.$secret));
        }else{
            $sign = bin2hex();
        }

        return $sign;
    }

    /**
     * 组建get请求链接
     * @param $url
     * @param $requestParams
     * @return bool|string
     */
    protected static function buildGetUrl($url,$requestParams){
        $url = $url.'?';
        $string = '';
        foreach ($requestParams as $key=>$val){
            $string .= "{$key}={$val}&";
        }

        /*去除掉最后一个字符*/
        return substr($url.$string,0,strlen($url.$string)-1);
    }

    /**
     * curl请求
     * @param $url
     * @param string $requestWay
     * @param null $postFields
     * @return mixed
     * @throws \Exception
     */
    protected static function httpCurl($url, $requestWay='GET',$postFields = null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);

        //https 请求
        if(strlen($url) > 5 && strtolower(substr($url,0,5)) == "https" ) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        /*post请求数据*/
        if (is_array($postFields) && 0 < count($postFields)){
            $postBodyString = "";
            $postMultipart = false;
            foreach ($postFields as $k => $v){
                if("@" != substr($v, 0, 1)){
                    $postBodyString .= "$k=" . urlencode($v) . "&";
                }else{
                    $postMultipart = true;
                    if(class_exists('\CURLFile')) $postFields[$k] = new \CURLFile(substr($v, 1));
                }
            }
            unset($k, $v);
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postMultipart){
                if (class_exists('\CURLFile')) {
                    curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
                } else {
                    if (defined('CURLOPT_SAFE_UPLOAD')) {
                        curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
                    }
                }
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            }else{
                $header = array("content-type: application/x-www-form-urlencoded; charset=UTF-8");
                curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
                curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
            }
        }

        /*执行请求*/
        $data = curl_exec($ch);
        if (curl_errno($ch)){
            throw new \Exception(curl_error($ch),0);
        }else{
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) throw new \Exception($data,$httpStatusCode);
        }
        curl_close($ch);

        return json_decode($data,true);
    }
}