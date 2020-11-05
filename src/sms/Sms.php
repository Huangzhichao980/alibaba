<?php
namespace panthsoni\alibaba\sms;

use panthsoni\alibaba\sms\lib\SingleValidate;
use panthsoni\alibaba\sms\lib\SmsClient;
use panthsoni\alibaba\sms\lib\Tools;

class Sms
{
    protected static $defaultConf = [
        'domain' => 'dysmsapi.aliyuncs.com',
        'method' => 'POST',
        'security' => true
    ];

    protected static $defaultParams = [
        "RegionId" => "cn-hangzhou",
        "Action" => "SendSms",
        "Version" => "2017-05-25",
    ];

    protected static $conf = [];

    protected static $params = [];

    public function __construct($conf=[],$params=[]){
        self::$conf = array_merge($conf,self::$defaultConf);
        self::$params = array_merge($params,self::$defaultParams);
    }

    /**
     * 静态方法初始化配置
     * @param array $conf
     * @param array $params
     * @return Sms
     */
    public static function init($conf=[],$params=[]){
        return new self($conf,$params);
    }

    /**
     * 批量设置配置
     * @param array $conf
     * @return $this
     */
    public function setConf($conf=[]){
        self::$conf = array_merge($conf,self::$defaultConf);
        return $this;
    }

    /**
     * 设置access_key_id
     * @param $accessKeyId
     * @return $this
     */
    public function setAccessKeyId($accessKeyId){
        self::$conf['AccessKeyId'] = $accessKeyId;
        return $this;
    }

    /**
     * 设置access_key_secret
     * @param $accessKeySecret
     * @return $this
     */
    public function setAccessKeySecret($accessKeySecret){
        self::$conf['AccessKeySecret'] = $accessKeySecret;
        return $this;
    }

    /**
     * 设置域名
     * @param $domain
     * @return $this
     */
    public function setDomain($domain){
        self::$conf['domain'] = $domain;
        return $this;
    }

    /**
     * 设置是否安全模式
     * @param $security
     * @return $this
     */
    public function setSecurity($security){
        self::$conf['security'] = $security;
        return $this;
    }

    /**
     * 设置请求方法
     * @param $method
     * @return $this
     */
    public function setMethod($method){
        self::$conf['method'] = $method;
        return $this;
    }

    /**
     * 设置短信签名
     * @param $signName
     * @return $this
     */
    public function setSignName($signName){
        self::$params['SignName'] = $signName;
        return $this;
    }

    /**
     * 设置参数
     * @param $params
     * @return $this
     */
    public function setParams($params=[]){
        self::$params = array_merge($params,self::$defaultParams);
        return $this;
    }

    /**
     * 设置手机号码
     * @param $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber){
        self::$params['PhoneNumbers'] = $phoneNumber;
        return $this;
    }

    /**
     * 设置模板code
     * @param $templateCode
     * @return $this
     */
    public function setTemplateCode($templateCode){
        self::$params['TemplateCode'] = $templateCode;
        return $this;
    }

    /**
     * @param $outId
     * @return $this
     */
    public function setOutId($outId){
        self::$params['OutId'] = $outId;
        return $this;
    }

    /**
     * @param $smsUpExtendCode
     * @return $this
     */
    public function setSmsUpExtendCode($smsUpExtendCode){
        self::$params['SmsUpExtendCode'] = $smsUpExtendCode;
        return $this;
    }

    /**
     * 设置模板参数
     * @param $templateParam
     * @return $this
     * @throws \Exception
     */
    public function setTemplateParam($templateParam){
        if (!is_array($templateParam)) throw new \Exception('模板参数数据格式有误，必须为数组',-10013);
        self::$params['TemplateParam'] = $templateParam;
        return $this;
    }

    /**
     * 设置注册商id
     * @param $regionId
     * @return $this
     */
    public function setRegionId($regionId){
        self::$params['RegionId'] = $regionId;
        return $this;
    }

    /**
     * 设置动作
     * @param $action
     * @return $this
     */
    public function setAction($action){
        self::$params['Action'] = $action;
        return $this;
    }

    /**
     * 设置版本号
     * @param $version
     * @return $this
     */
    public function setVersion($version){
        self::$params['Version'] = $version;
        return $this;
    }

    /**
     * 单条信息发送
     * @return bool|\stdClass
     * @throws \Exception
     */
    public function singleSend(){
        $data = Tools::validate(array_merge(self::$params,self::$conf),new SingleValidate(),'singleSend');

        /*格式化短信模板*/
        if (isset($data['TemplateParam'])){
            $data['TemplateParam'] = json_encode($data['TemplateParam'], JSON_UNESCAPED_UNICODE);
        }

        /*验证号码是否有误*/
        foreach ($data['PhoneNumbers'] as $val){
            if (!Tools::isMobile($val)) throw new \Exception('手机号码有误',-10041);
        }

        /*短信发送*/
        $content = "发送失败";
        $signatureHelper = new SmsClient();
        foreach ($data['PhoneNumbers'] as $val){
            $data['PhoneNumbers'] = $val;
            $content = $signatureHelper->request(
                $data['AccessKeyId'],
                $data['AccessKeySecret'],
                $data['domain'],
                $data,
                $data['security'],
                $data['method']
            );
        }

        return $content;
    }
}