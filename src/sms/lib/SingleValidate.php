<?php
namespace panthsoni\alibaba\sms\lib;

use panthsoni\alibaba\common\CommonValidate;

class SingleValidate extends CommonValidate
{
    protected $rule = [
        'domain|短信发送域名domain' => 'length:0,50',
        'method|请求方式method' => 'length:0,10',
        'security|是否安全security' => 'in:false,true',
        'RegionId|地区RegionId' => 'length:0,20',
        'Action|请求动作Action' => 'length:0,10',
        'Version|短信版本Version' => 'length:0,10',
        'AccessKeyId|短信AccessKeyId' => 'length:0,50',
        'AccessKeySecret|短信密钥AccessKeySecret' => 'length:0,100',
        'SignName|短信签名SignName' => 'length:0,10',
        'PhoneNumbers|电话号码PhoneNumbers' => 'array',
        'TemplateCode|短信模板TemplateCode' => 'length:0,15',
        'TemplateParam|短信模板参数TemplateParam' => 'length:0,50'
    ];

    public $scene = [
        'singleSend'=>[
            'domain'=>'require|length:0,50',
            'method'=>'require|length:0,10',
            'security'=>'require|in:false,true',
            'RegionId'=>'require|length:0,20',
            'Action'=>'require|length:0,10',
            'Version'=>'require|length:0,10',
            'AccessKeyId'=>'require|length:0,50',
            'AccessKeySecret'=>'require|length:0,100',
            'SignName'=>'require|length:0,10',
            'PhoneNumbers'=>'require|array',
            'TemplateCode'=>'require|length:0,15','TemplateParam'
        ]
    ];
}