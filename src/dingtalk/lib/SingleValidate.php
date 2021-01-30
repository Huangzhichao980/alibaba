<?php


namespace panthsoni\alibaba\dingtalk\lib;


use panthsoni\alibaba\common\CommonValidate;

class SingleValidate extends CommonValidate
{
    protected $rule = [
        'appkey|应用key' => 'length:0,50',
        'appsecret|应用密钥' => 'length:0,128',
        'accessKey|应用key' => 'length:0,128',
        'accessSecret|应用密钥' => 'length:0,128',
        'suiteTicket|钉钉推送suiteTicket' => 'length:0,128',
        'auth_corpid|授权企业auth_corpid' => 'length:0,128',
        'suite_key|第三方suite_key' => 'length:0,50',
        'suite_secret|第三方suite_secret' => 'length:0,128',
        'suite_ticket|第三方suite_ticket' => 'length:0,50',
        'access_token|服务端api的access_token' => 'length:0,128',
        'appid|扫码登录appid' => 'length:0,128',
        'redirect_uri|扫码登录回调地址redirect_uri' => 'length:0,255',
        'loginTmpCode|js获取到的loginTmpCode' => 'length:0255',
        'state|额外参数state' => 'length:0,128',
        'timestamp|当前时间戳' => 'length:0,128',
        'tmp_auth_code|授权码tmp_auth_code' => 'length:0,128'
    ];

    public $scene = [
        'gettoken' => [
            'appkey' => 'require|length:0,50',
            'appsecret' => 'require|length:0,128',
        ],
        'get_corp_token' => [

        ],
        'get_suite_token' => [
            'suite_key' => 'require|length:0,128',
            'suite_secret' => 'require|length:0,128',
            'suite_ticket' => 'require|length:0,128',
        ],
        'get_jsapi_ticket' => [
            'access_token' => 'require|length:0,128'
        ],
        'login_ding_talk_page' => [
            'appid' => 'require|length:0,128',
            'redirect_uri' => 'require|length:0,255',
            'state' => 'require|length:0,128'
        ],
        'login_ding_talk_other' => [
            'appid' => 'require|length:0,128',
            'redirect_uri' => 'require|length:0,255',
            'state' => 'require|length:0,128',
            'loginTmpCode' => 'require|length:0,128'
        ],
        'getuserinfo_bycode' => [
            'accessKey' => 'require|length:0,128',
            'timestamp' => 'require|length:0,255',
            'tmp_auth_code' => 'require|length:0,128'
        ]
    ];
}