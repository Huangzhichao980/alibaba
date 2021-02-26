<?php
namespace panthsoni\alibaba\top\lib;

use panthsoni\alibaba\common\CommonApi;
use panthsoni\alibaba\common\SingleValidate;

class TopClient extends CommonApi
{
    /**
     * 公众参数
     * @var array
     */
    protected static $options = [
        'format' => 'json',
        'v' => '2.0',
        'sign_method' => 'md5'
    ];

    /**
     * 必选参数
     * @var array
     */
    protected static $params = [];

    /**
     * 可选参数
     * @var array
     */
    protected static $bizParams = [];

    /**
     * 请求方式
     * @var string
     */
    protected static $request = 'GET';

    /**
     * 请求方法
     * @var string
     */
    protected static $method = '';

    /**
     * 生成地址
     * @var string
     */
    protected static $productDomain = 'https://eco.taobao.com';

    /**
     * 测试地址
     * @var string
     */
    protected static $testDomain = 'https://gw.api.tbsandbox.com';

    /**
     * 调用环境，false为测试
     * @var bool
     */
    protected static $env = false;

    /**
     * 密钥
     * @var string
     */
    protected static $secret = '';

    /**
     * 是否返回链接
     * @var bool
     */
    protected static $isBackUrl = true;

    /**
     * 自定义域名地址
     * @var string
     */
    protected static $selfDomain = '';

    /**
     * 不需要验证公众参数和密钥的方法
     * @var array
     */
    protected static $notNeedSecretAndCommon = ['web_server_authorize','client_server_authorize'];

    /**
     * 初始化
     * TopClient constructor.
     * @param array $options
     */
    public function __construct(array $options=[]){
        self::$options = array_merge(self::$options,$options);
    }

    /**
     * 设置公共参数
     * @param array $options
     * @return $this
     */
    public function setOptions(array $options){
        self::$options = array_merge(self::$options,$options);
        return $this;
    }

    /**
     * 设置必选参数
     * @param array $params
     * @return $this
     */
    public function setParams(array $params){
        self::$params = array_merge(self::$params,$params);
        return $this;
    }

    /**
     * 设置可选参数
     * @param array $bizParams
     * @return $this
     */
    public function setBizParams(array $bizParams){
        self::$bizParams = array_merge(self::$bizParams,$bizParams);
        return $this;
    }

    /**
     * 设置method
     * @param $method
     * @return $this
     */
    public function setMethod($method){
        self::$options = array_merge(self::$options,['method'=>$method]);
        self::$method = $method;
        return $this;
    }

    /**
     * 设置appkey
     * @param $appKey
     * @return $this
     */
    public function setAppKey($appKey){
        self::$options = array_merge(self::$options,['app_key'=>$appKey]);
        return $this;
    }

    /**
     * 设置session
     * @param $session
     * @return $this
     */
    public function setSession($session){
        self::$options = array_merge(self::$options,['session'=>$session]);
        return $this;
    }

    /**
     * 设置输出方式
     * @param $format
     * @return $this
     */
    public function setFormat($format){
        self::$options = array_merge(self::$options,['format'=>$format]);
        return $this;
    }

    /**
     * 设置版本
     * @param $version
     * @return $this
     */
    public function setVersion($version){
        self::$options = array_merge(self::$options,['v'=>$version]);
        return $this;
    }

    /**
     * 设置签名方式
     * @param $signMethod
     * @return $this
     */
    public function setSignMethod($signMethod){
        self::$options = array_merge(self::$options,['sign_method'=>$signMethod]);
        return $this;
    }

    /**
     * 设置请求环境
     * @param bool $env
     * @return $this
     */
    public function setEnv($env=false){
        self::$env = $env;
        return $this;
    }

    /**
     * 设置密钥
     * @param $secret
     * @return $this
     */
    public function setSecret($secret){
        self::$secret = $secret;
        return $this;
    }

    /**
     * 是否返回链接
     * @param $isBackUrl
     * @return $this
     */
    public function isBackUrl($isBackUrl=true){
        self::$isBackUrl = $isBackUrl;
        return $this;
    }

    /**
     * 自定义http地址
     * @param $selfDomain
     * @return $this
     */
    public function setSelfDomain($selfDomain){
        self::$selfDomain = $selfDomain;
        return $this;
    }

    /**
     * 获取结果
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function getResult(){
        /*判断方法是否设置*/
        if (!self::$method){
            throw new \Exception('缺少必备的method参数',-10005);
        }

        /*判断方法是否授权*/
        if (!isset(self::$methodList[self::$method])){
            throw new \Exception('请求方法未授权',-10025);
        }

        /*验证参数*/
        $commonParams = [];
        if (!in_array(self::$method,self::$notNeedSecretAndCommon)){
            if (!self::$secret){
                throw new \Exception('secret缺失',-10039);
            }
            $commonParams = Tools::validate(array_merge(self::$options,self::$params,self::$bizParams),new SingleValidate(),'commonTaobao');
        }

        /*参数验证*/
        $requestParams = Tools::validate(array_merge(self::$options,self::$params,self::$bizParams),new SingleValidate(),self::$method);

        /*判断当前环境所使用的域名地址*/
        $domain = self::$env?self::$productDomain:self::$testDomain;

        /*是否自定义域名地址*/
        $domain = self::$selfDomain?self::$selfDomain:$domain;

        /*组建请求链接*/
        $url = $domain.self::$methodList[self::$method]['request_uri'];

        /*判断此接口是否需要授权，需要授权则session字段必传*/
        if (self::$methodList[self::$method]['is_need_auth'] && !isset(self::$options['session'])){
            throw new \Exception('session缺失',-10038);
        }

        /*获取请求结果*/
        return Tools::buildRequest($url,array_merge($requestParams,$commonParams),self::$secret,self::$isBackUrl,self::$method,self::$request);
    }
}