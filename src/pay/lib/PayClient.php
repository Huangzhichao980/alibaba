<?php
namespace panthsoni\alibaba\pay\lib;

class PayClient extends PayApi
{
    /**
     * 公众参数
     * @var array
     */
    protected static $options = [
        'format' => 'json',
        'charset' => 'utf8',
        'version' => '1.0',
        'sign_type' => 'RSA2',
    ];

    protected static $params = [];
    protected static $bizParams = [];
    protected static $gatewayUrl = '';
    protected static $isBackUrl = true;
    protected static $method = '';
    protected static $isTestEnv = true;
    protected static $userAuthUrl = '';

    /**
     * 初始化
     * PayClient constructor.
     * @param array $options
     */
    public function __construct(array $options=[]){
        self::$gatewayUrl = self::$isTestEnv?'https://openapi.alipaydev.com/gateway.do?':'https://openapi.alipay.com/gateway.do?';
        self::$userAuthUrl = self::$isTestEnv?'https://openauth.alipaydev.com/oauth2/publicAppAuthorize.htm?':'https://openauth.alipay.com/oauth2/publicAppAuthorize.htm?';
        self::$options = array_merge(self::$options,$options);
    }

    /**
     * 设置基本参数
     * @param array $options
     * @return $this
     */
    public function setOptions($options=[]){
        self::$options = array_merge(self::$options,$options);
        return $this;
    }

    /**
     * 设置必传参数
     * @param array $params
     * @return $this
     */
    public function setParams($params=[]){
        self::$params = array_merge(self::$params,$params);
        return $this;
    }

    /**
     * 设置可选参数
     * @param array $bizParams
     * @return $this
     */
    public function setBizParams($bizParams=[]){
        self::$bizParams = array_merge(self::$bizParams,$bizParams);
        return $this;
    }

    /**
     * 是否返回url
     * @param bool $isBackUrl
     * @return $this
     */
    public function isBackUrl($isBackUrl=true){
        self::$isBackUrl = $isBackUrl;
        return $this;
    }

    /**
     * 是否测试环境
     * @param bool $isTestEnv
     * @return $this
     */
    public function isTestEnv($isTestEnv=true){
        self::$isTestEnv = $isTestEnv;
        return $this;
    }

    /**
     * 设置方法
     * @param $method
     * @return $this
     */
    public function setMethod($method){
        self::$method = $method;
        self::$options['method'] = $method;
        return $this;
    }

    /**
     * 获取结果
     * @return string
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

        /*验证方法参数*/
        $paramsMerge =  array_merge(self::$options,self::$params,self::$bizParams);
        $poorParams = Tools::validate($paramsMerge,new SingleValidate(),self::$method);

        /*判断是否需要授权*/
        if (self::$methodList[self::$method]['is_auth'] && !isset($paramsMerge['auth_token'])){
            throw new \Exception('token缺失',-10026);
        }

        /*验证公共参数*/
        $commonParams = Tools::validate($paramsMerge,new SingleValidate(),'common');

        /*参数合并*/
        if (isset(self::$methodList[self::$method]['wip_biz_content']) && self::$methodList[self::$method]['wip_biz_content']){
            $mergeParams = array_merge($commonParams,['timestamp' => date('Y-m-d H:i:s')],$poorParams);
        }else{
            $mergeParams = array_merge($commonParams,[
                'biz_content' => json_encode($poorParams,JSON_UNESCAPED_UNICODE),
                'timestamp' => date('Y-m-d H:i:s')
            ]);
        }

        /*组建请求参数*/
        $res = Tools::buildRequest($mergeParams,self::$gatewayUrl,self::$isBackUrl);

        return $res;
    }

    /**
     * 用户授权
     * @return string
     * @throws \Exception
     */
    public function auth(){
        $data = Tools::validate(array_merge(self::$options,self::$params,self::$bizParams),new SingleValidate(),'auth');

        /*组建请求参数*/
        $res = Tools::buildRequest($data,self::$userAuthUrl,self::$isBackUrl,false);

        return $res;
    }
}