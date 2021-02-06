<?php


namespace panthsoni\alibaba\dingtalk\lib;


class DingTalkApi
{
    protected static $methodList = [
        /*获取企业内部accesstoken*/
        'gettoken' => [
            'request_way' => 'GET',
            'request_uri' => '/gettoken?appkey=[appkey]&appsecret=[appsecret]',
        ],

        /*获取第三方应用的access_token*/
        'get_corp_token' => [
            'request_way' => 'POST',
            'request_uri' => '/service/get_corp_token'
        ],

        /*获取第三方应用的suite_ticket*/
        'get_suite_token' => [
            'request_way' => 'POST',
            'request_uri' => '/service/get_suite_token'
        ],

        /*获取jsapi_ticket*/
        'get_jsapi_ticket' => [
            'request_way' => 'GET',
            'request_uri' => '/get_jsapi_ticket'
        ],

        /*获取微应用后台access_token*/
        'get_sso_token' => [
            'request_way' => 'GET',
            'request_uri' => '/sso/gettoken?corpid=[corpid]&corpsecret=[corpsecret]'
        ],

        /*使用钉钉提供的扫码登录页面1*/
        'login_ding_talk_page' => [
            'request_way' => 'GET',
            'request_uri' => '/connect/qrconnect?appid=[appid]&response_type=code&scope=snsapi_login&state=[state]&redirect_uri=[redirect_uri]'
        ],

        /*使用钉钉提供的扫码登录页面2*/
        'login_ding_talk_other' => [
            'request_way' => 'GET',
            'request_uri' => '/connect/oauth2/sns_authorize?appid=[appid]&response_type=code&scope=snsapi_login&state=[state]&redirect_uri=[redirect_uri]&loginTmpCode=[loginTmpCode]'
        ],

        /*通过code获取用户信息*/
        'getuserinfo_bycode' => [
            'request_way' => 'POST',
            'request_uri' => '/sns/getuserinfo_bycode?timestamp=[timestamp]&accessKey=[accessKey]&signature=[signature]'
        ],

        /*通过unionid获取用户信息*/
        'get_userinfo_by_unionid' => [
            'request_way' => 'POST',
            'request_uri' => '/topapi/user/getbyunionid?access_token=[access_token]'
        ],

        /*通过unionid获取用户信息*/
        'get_userinfo_by_userid' => [
            'request_way' => 'POST',
            'request_uri' => '/topapi/v2/user/get?access_token=[access_token]'
        ],

        /*获取登录应用access_token*/
        'get_login_token' => [
            'request_way' => 'GET',
            'request_uri' => '/sns/gettoken?appid=[appid]&appsecret=[appsecret]'
        ],

        /*获取登录应用persistent_code*/
        'get_persistent_code' => [
            'request_way' => 'POST',
            'request_uri' => '/sns/get_persistent_code?access_token=[access_token]'
        ],

        /*获取登录应用sns_token*/
        'get_sns_token' => [
            'request_way' => 'POST',
            'request_uri' => '/sns/get_sns_token?access_token=[access_token]'
        ],

        /*获取登录应用用户信息*/
        'getuserinfo' => [
            'request_way' => 'GET',
            'request_uri' => '/sns/getuserinfo?sns_token=[sns_token]'
        ],

        /*使用模板发送工作通知消息*/
        'sendbytemplate' => [
            'request_way' => 'POST',
            'request_uri' => '/topapi/message/corpconversation/sendbytemplate?access_token=[access_token]'
        ],

        /*发送工作通知*/
        'asyncsend_v2' => [
            'request_way' => 'POST',
            'request_uri' => '/topapi/message/corpconversation/asyncsend_v2?access_token=[access_token]'
        ],

        /*更新工作通知状态栏*/
        'status_bar_update' => [
            'request_way' => 'POST',
            'request_uri' => '/topapi/message/corpconversation/status_bar/update?access_token=[access_token]'
        ],
    ];
}