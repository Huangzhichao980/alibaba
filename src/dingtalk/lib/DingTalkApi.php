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

        /*获取用户信息1*/
        'getuserinfo_bycode' => [
            'request_way' => 'POST',
            'request_uri' => '/sns/getuserinfo_bycode?timestamp=[timestamp]&accessKey=[accessKey]&signature=[signature]'
        ],
    ];
}