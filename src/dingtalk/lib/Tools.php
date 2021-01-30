<?php


namespace panthsoni\alibaba\dingtalk\lib;


use panthsoni\alibaba\common\CommonTools;

class Tools extends CommonTools
{
    /**
     * Get参数替换
     * @var array
     */
    protected static $paramsReplaceList = [
        'appkey' => '[appkey]',
        'appsecret' => '[appsecret]',
        'redirect_uri' => '[redirect_uri]',
        'access_token' => '[access_token]',
        'state' => '[state]',
        'appid' => '[appid]',
        'loginTmpCode' => '[loginTmpCode]',
        'timestamp' => '[timestamp]',
        'accessKey' => '[accessKey]',
        'signature' => '[signature]'
    ];

    /**
     * 实例化
     * Tools constructor.
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * 组建请求结果
     * @param $requestUrl
     * @param $requestParams
     * @param $requestWay
     * @param false $isBackUrl
     * @param string $method
     * @return bool|mixed|string|string[]
     */
    public static function buildRequestResult($requestUrl,$requestParams,$requestWay,$isBackUrl=false,$method=''){
        /*替换参数处理*/
        $replaceParams = [];
        $replaceValues = [];
        foreach (self::$paramsReplaceList as $key=>$val){
            $replaceParams[] = $val;
            $replaceValues[] = isset($requestParams[$key])?$requestParams[$key]:'';
        }

        /*替换结果*/
        $requestUrl = str_replace($replaceParams,$replaceValues,$requestUrl);

        /*根据不同的请求方式，将参数进行过滤*/
        $getParams = explode('&',isset(explode('?',$requestUrl)[1])?explode('?',$requestUrl)[1]:'');
        foreach ($getParams as $val){
            $val = explode('=',$val)[0];
            if (isset($requestParams[$val])) unset($requestParams[$val]);
        }

        /*返回链接*/
        if ($isBackUrl) return $requestUrl;

        /*curl请求*/
        return self::httpCurl($requestUrl,$requestWay,$requestParams);
    }

    /**
     * curl请求
     * @param string $url
     * @param string $requestWay
     * @param array $params
     * @return bool|mixed
     */
    protected static function httpCurl($url='',$requestWay='GET',$params=[]){
        if (!$url) return false;

        /*curl请求*/
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL,$url);//抓取指定网页
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);//设置header
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        if ($requestWay == 'POST'){
            curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params,JSON_UNESCAPED_UNICODE));
        }
        $data = curl_exec($ch);//运行curl
        curl_close($ch);

        return json_decode($data,true);
    }

    /**
     * 生成签名
     * @param $requestParamsList
     * @return string
     */
    protected static function makeSignature($requestParamsList){
        /*生成签名*/
        $tmpString = time() ."\n".$requestParamsList['suiteTicket'];
        $tmpArr = [$requestParamsList['token'],$requestParamsList['timestamp'],$requestParamsList['nonce']];
        sort($tmpArr, SORT_STRING);
        $signature = sha1(implode($tmpArr));

        return $signature;
    }
}