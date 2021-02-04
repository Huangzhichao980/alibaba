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
        'tmp_auth_code|授权码tmp_auth_code' => 'length:0,128',
        'corpid|企业的corpid' => 'length:0,128',
        'corpsecret|企业的corpsecret' => 'length:0,128',
        'signature|签名signature' => 'length:0,128',
        'appsecret|密钥appsecret' => 'length:0,128',
        'persistent_code|扫码persistent_code' => 'length:0,128',
        'openid|用户openid' => 'length:0,128',
        'unionid|用户unionid' => 'length:0,50',
        'userid|用户userid' => 'length:0,50',
        'language|语言language设置' => 'in:zh_CN,en_US',
        'sns_token|用户信息获取sns_token' => 'length:0,128',
        'signature|签名' => 'length:0,128',
        'nonce|随机字符串' => 'length:0,128',
        'token|token' => 'length:0,128',
        'encoding_ace_key|encoding_ace_key' => 'length:0,128',
        'encrypt|加密信息' => 'length:0,10000',
        'agent_id|应用的agent_id' => 'number',
        'template_id|消息模板template_id' => 'length:0,255',
        'userid_list|接收者用户userid列表userid_list' => 'length:0,5000',
        'dept_id_list|接收者的部门id列表dept_id_list' => 'length:0,255',
        'data|消息模板动态参数赋值数据data' => 'length:0,255',
        'to_all_user|是否发送给企业全部用户to_all_user' => 'boolean',
        'msg|消息内容json格式msg' => 'length:0,2048',
        'task_id|工作通知任务ID的task_id' => 'number',
        'status_value|状态栏值status_value' => 'length:0,128',
        'status_bg|状态栏背景色，推荐0xFF加六位颜色值status_bg' => 'length:0,128',
    ];

    public $scene = [
        'listen' => [
            'signature' => 'require|length:0,128',
            'timestamp' => 'require|length:0,128',
            'nonce' => 'require|length:0,128',
            'token' => 'require|length:0,128',
            'encoding_ace_key' => 'require|length:0,128',
            'suite_key' => 'require|length:0,128',
            'encrypt' => 'require|length:0,10000'
        ],
        'gettoken' => [
            'appkey' => 'require|length:0,50',
            'appsecret' => 'require|length:0,128',
        ],
        'get_corp_token' => [
            'accessKey' => 'require|length:0,50',
            'accessSecret' => 'require|length:0,128',
            'suiteTicket' => 'require|length:0,50',
            'auth_corpid' => 'require|length:0,128',
            'signature' => 'require|length:0,128'
        ],
        'get_suite_token' => [
            'suite_key' => 'require|length:0,128',
            'suite_secret' => 'require|length:0,128',
            'suite_ticket' => 'require|length:0,128',
        ],
        'get_jsapi_ticket' => [
            'access_token' => 'require|length:0,128'
        ],
        'get_sso_token' => [
            'corpid' => 'require|length:0,128',
            'corpsecret' => 'require|length:0,128',
        ],
        'login_ding_talk_page' => [
            'appid' => 'require|length:0,128',
            'redirect_uri' => 'require|length:0,255',
            'state'
        ],
        'login_ding_talk_other' => [
            'appid' => 'require|length:0,128',
            'redirect_uri' => 'require|length:0,255',
            'loginTmpCode' => 'require|length:0,128',
            'state',
        ],
        'getuserinfo_bycode' => [
            'accessKey' => 'require|length:0,128',
            'timestamp' => 'require|length:0,255',
            'tmp_auth_code' => 'require|length:0,128',
            'signature' => 'require|length:0,128'
        ],
        'get_login_token' => [
            'appid' => 'require|length:0,128',
            'appsecret' => 'require|length:0,255'
        ],
        'get_persistent_code' => [
            'tmp_auth_code' => 'require|length:0,128',
            'access_token' => 'require|length:0,255',
        ],
        'get_sns_token' => [
            'openid' => 'require|length:0,128',
            'access_token' => 'require|length:0,255',
            'persistent_code' => 'require|length:0,128'
        ],
        'getuserinfo' => [
            'sns_token' => 'require|length:0,255'
        ],
        'get_userinfo_by_unionid' => [
            'access_token' => 'require|length:0,255',
            'unionid' => 'require|length:0,128'
        ],
        'get_userinfo_by_userid' => [
            'access_token' => 'require|length:0,255',
            'userid' => 'require|length:0,128',
            'language'
        ],
        'sendbytemplate' => [
            'access_token' => 'require|length:0,255',
            'agent_id' => 'require|number',
            'template_id' => 'require|length:0,255',
            'userid_list','dept_id_list','data'
        ],
        'asyncsend_v2' => [
            'access_token' => 'require|length:0,255',
            'agent_id' => 'require|number',
            'msg' => 'require|length:0,2048',
            'userid_list','dept_id_list','to_all_user'
        ],
        'status_bar_update' => [
            'access_token' => 'require|length:0,255',
            'agent_id' => 'require|number',
            'task_id' => 'require|number',
            'status_value' => 'require|length:0,128',
            'status_bg'
        ],
    ];
}