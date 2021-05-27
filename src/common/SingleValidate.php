<?php


namespace panthsoni\alibaba\common;


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
        'app_id|应用app_id' => 'length:0,32',
        'method|接口名称method' => 'length:0,50',
        'format|返回格式format' => 'length:0,40',
        'charset|编码格式charset' => 'in:utf8,gbk,gb2312',
        'sign_type|算法类型sign_type' => 'in:RSA2,RSA',
        'version|接口版本version' => 'in:1.0',
        'notify_url|通知notify_url' => 'length:0,255',
        'app_auth_token|授权app_auth_token' => 'length:0,40',
        'private_key|私钥private_key' => 'length:0,100000000000000',
        'public_key|公钥public_key' => 'length:0,100000000000000',
        'out_trade_no|商户订单号out_trade_no' => 'length:0,64',
        'product_code|销售产品码product_code' => 'in:FAST_INSTANT_TRADE_PAY,QUICK_WAP_WAY,PRE_AUTH,OVERSEAS_INSTORE_AUTH',
        'total_amount|订单总金额total_amount' => 'number',
        'subject|订单标题subject' => 'length:0,256',
        'scene|支付场景scene' => 'in:bar_code,wave_code',
        'auth_code|授权码auth_code' => 'length:0,32',
        'quit_url|用户付款中途退出返回商户网站的地址quit_url' => 'length:0,255',
        'trade_no|支付宝交易号trade_no' => 'length:0,64',
        'refund_amount|退款金额refund_amount' => 'number',
        'out_request_no|标识一次退款请求out_request_no' => 'length:0,64',
        'royalty_parameters|分账明细信息royalty_parameters' => 'array',
        'auth_code_type|授权码类型auth_code_type' => 'in:bar_code,security_code',
        'out_order_no|商户授权资金订单号out_order_no' => 'length:0,64',
        'order_title|业务订单的简单描述order_title' => 'length:0,100',
        'amount|需要冻结的金额amount' => 'number',
        'biz_type|业务类型biz_type' => 'in:CREDIT_AUTH,CREDIT_DEDUCT,POST_ORDER_PAY',
        'alipay_user_id|支付宝用户alipay_user_id' => 'length:0,32',
        'consult_scene|订单咨询类型consult_scene' => 'in:ORDER_RISK_EVALUATION',
        'agreement_no|用户签约记录的编号agreement_no' => 'length:0,64',
        'shop_id|口碑门店shop_id' => 'length:0,28',
        'pay_amount|需要支付的金额pay_amount' => 'number',
        'issue_org_no|发卡机构代码issue_org_no' => 'length:0,32',
        'card_no|卡号card_no' => 'length:0,128',
        'card_status|卡片状态card_status' => 'in:FREEZE,CANCEL',
        'biz_token|访问biz_token' => 'length:0,100',
        'ad_level|广告层级类型ad_level' => 'in:PLAN,GROUP,CREATIVE,USER',
        'start_date|查询开始时间start_date' => 'dateFormat:Ymd',
        'end_date|查询结束时间end_date' => 'dateFormat:Ymd',
        'outer_id_list|对应的外部资源outer_id_list' => 'length:0,20000',
        'op_code|用于标识操作模型op_code' => 'length:0,128',
        'channel|接口请求渠道编码channel' => 'length:0,128',
        'target_id|场景覆盖的目标人群标识target_id' => 'length:0,32',
        'target_id_type|场景覆盖人群id类型target_id_type' => 'length:0,32',
        'trade_apply_params|交易请求参数trade_apply_params' => 'array',
        'order_detail|场景的数据表示order_detail' => 'length:0,255',
        'partner_id|网商合作伙伴partner_id' => 'length:0,32',
        'recon_related_no|对账关联recon_related_no' => 'length:0,64',
        'pd_code|业务产品码pd_code' => 'length:0,32',
        'ev_code|业务事件码ev_code' => 'length:0,32',
        'currency_code|币种值currency_code' => 'length:0,16',
        'goods_info|商品信息goods_info' => 'array',
        'request_id|请求request_id' => 'length:0,64',
        'biz_product|业务产品biz_product' => 'length:0,32',
        'biz_scene|业务场景biz_scene' => 'length:0,32',
        'buyer_id|买家支付宝buyer_id' => 'length:0,32',
        'item_order_details|购买商品信息item_order_details' => 'array',
        'refund_infos|退货明细信息refund_infos' => 'array',
        'isv_ma_list|需要发送的码列表isv_ma_list' => 'array',
        'code_type|码类型code_type' => 'in:INTERNAL_CODE,EXTERNAL_CODE,INTERNAL_CODE',
        'ticket_code|凭证码ticket_code' => 'length:0,12',
        'request_biz_no|业务请求号request_biz_no' => 'length:0,64',
        'quantity|冲正份数quantity' => 'length:0,4',
        'scope|授权域scope' => 'length:0,128',
        'redirect_uri|回调地址redirect_uri' => 'length:0,255',
        'state|回调参数state' => 'length:0,128',
        'grant_type|授权类型grant_type' => 'in:authorization_code,refresh_token',
        'code|授权码code' => 'length:0,40',
        'refresh_token|刷新令牌refresh_token' => 'length:0,40',
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
        'TemplateParam|短信模板参数TemplateParam' => 'length:0,50',
        'app_key|app_key' => 'length:0,50',
        'target_app_key|目标target_app_key' => 'length:0,30',
        'sign_method|签名方法sign_method' => 'in:hmac,md5',
        'sign|签名sign' => 'length:0,100',
        'session|登录授权session' => 'length:0,100',
        'timestamp|时间戳timestamp' => 'dateFormat:Y-m-d H:i:s',
        'format|响应格式format' => 'in:xml,json',
        'v|api协议版本v' => 'length:0,5',
        'partner_id|合作伙伴身份标识partner_id' => 'length:0,30',
        'simplify|是否采用精简json格式返回simplify' => 'in:true,false',
        'nick|用户昵称nick' => 'length:0,20',
        'fields|返回参数字段fields' => 'length:0,50',
        'client_id|客户端client_id' => 'length:0,50',
        'response_type|授权类型response_type' => 'in:code,token',
        'state|应用状态state' => 'length:0,50',
        'view|页面样式view' => 'in:web,tmall,wap',
        'client_secret|客户端密钥client_secret' => 'length:0,255',
        'code|code码' => 'length:0,255',
        'src_mix_nick|混淆昵称src_mix_nick' => 'length:0,128',
        'src_appkey|输入的src_appkey' => 'length:0,50',
        'tb_user_id|淘宝用户tb_user_id' => 'number',
        'open_uid|基于Appkey生成的open security淘宝用户open_uid' => 'length:0,50',
        'open_account_ids|Open Account的open_account_ids列表' => 'array',
        'isv_account_ids|ISV自己账号的isv_account_ids列表' => 'array',
        'param_list|Open Account的param_list' => 'array',
        'OwnerAppkey|OwnerAppkey' => 'length:0,50',
        'query|查询信息query' => 'length:0,100',
        'param_token|param_token' => 'length:0,100',
        'token_timestamp|时间戳（单位毫秒）token_timestamp' => 'number',
        'open_account_id|open_account_id' => 'number',
        'isv_account_id|isv自己账号的唯一isv_account_id' => 'length:0,50',
        'uuid|用于防重放的唯一uuid' => 'length:0,100',
        'login_state_expire_in|ISV APP的登录态时长单位是秒login_state_expire_in' => 'number',
        'ext|用于透传一些业务附加参数ext' => 'json',
        'index_type|index_type的int MOBILE = 1;int EMAIL = 2;int ISV_ACCOUNT_ID = 3;int LOGIN_ID = 4;int OPEN_ID = 5;' => 'in:1,2,3,4,5',
        'index_value|具体值index_value' => 'length:0,50',
        'grade_id|检查金额档位grade_id' => 'length:0,100',
        'param_settle_adjustment_request|结算调整单父节点param_settle_adjustment_request' => 'array',
        'num_iid|商品num_iid' => 'number',
        'count|返回量count' => 'number',
        'platform|链接形式platform' => 'in:1,2',
        'text|口令弹窗内容text' => 'length:0,50',
        'url|口令跳转目标页url' => 'length:0,255',
        'favorites_id|favorites_id' => 'number',
        'adzone_id|推广位adzone_id' => 'number',
        'unnamed|鉴权unnamed'=>'length:0,50',
        'param|参数param'=>'array',
        'right_ename|发放的权益唯一标识right_ename'=>'length:0,100',
        'receiver_id|接收奖品的用户receiver_id'=>'length:0,100',
        'user_type|用户类型user_type'=>'length:0,100',
        'unique_id|幂等校验unique_id'=>'length:0,100',
        'app_name|app_name'=>'length:0,100',
        'ip|ip地址'=>'length:0,100',
        'ename|奖池唯一标识ename'=>'length:0,100',
        'verify_code|验证码verify_code'=>'length:0,10',
        'phone|手机号码phone'=>'length:11,11',
        'data_set_id|数据集data_set_id'=>'length:0,100',
        'query|用户query'=>'length:0,255',
        'param0|参数param0'=>'array',
        'q|查询词q'=>'length:0,255',
        'sort|排序sort'=>'length:0,50',
        'is_tmall|是否商城的店铺is_tmall'=>'boolean',
        'start_credit|信用等级下限start_credit'=>'number',
        'end_credit|信用等级上限end_credit'=>'number',
        'start_commission_rate|淘客佣金比率下限start_commission_rate'=>'number',
        'end_commission_rate|淘客佣金比率上限end_commission_rate'=>'number',
        'start_total_action|店铺商品总数下限start_total_action'=>'number',
        'end_total_action|店铺商品总数上限end_total_action'=>'number',
        'start_auction_count|累计推广商品下限start_auction_count'=>'number',
        'end_auction_count|累计推广商品上限end_auction_count'=>'number',
        'page_no|第几页page_no'=>'number',
        'page_size|页大小page_size'=>'number',
        'user_id|卖家user_id'=>'number',
        'dept_id|父部门ID' => 'number',
        'language|通讯录语言' => 'in:zh_CN,en_US',
        'size|分页大小' => 'between:20,200',
        'offset|偏移量' => 'number'
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
        'getuserinfo_nologin' => [
            'access_token' => 'require|length:0,128',
            'code' => 'require|length:0,128',
        ],
        'getuserinfo_nologin2' => [
            'access_token' => 'require|length:0,128',
            'code' => 'require|length:0,128',
        ],
        'get_manager_info' => [
            'access_token' => 'require|length:0,128',
            'code' => 'require|length:0,128',
        ],
        'getuserinfo_bycode' => [
            'accessKey' => 'require|length:0,128',
            'timestamp' => 'require|length:0,255',
            'tmp_auth_code' => 'require|length:0,128',
            'signature' => 'require|length:0,128'
        ],
        'get_address_book_permissions' => [
            'access_token' => 'require|length:0,128',
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
        'get_department_list' => [
            'access_token' => 'require|length:0,255',
            'dept_id','language'
        ],
        'get_role_list' => [
            'access_token' => 'require|length:0,255',
            'size','offset'
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
        'common' => [
            'app_id' => 'require|length:0,32',
            'method' => 'require|length:0,32',
            'charset' => 'require|in:utf8,gbk,gb2312',
            'sign_type' => 'require|in:RSA2,RSA',
            'version' => 'require|length:0,32',
            'private_key' => 'require|length:0,100000000000000',
            'public_key' => 'require|length:0,100000000000000',
            'format','notify_url','app_auth_token','auth_token'
        ],

        /*用户授权*/
        'auth' => [
            'app_id' => 'require|length:0,32',
            'scope' => 'require|length:0,128',
            'redirect_uri' => 'require|length:0,255',
            'state'
        ],

        /*支付api*/
        'alipay.trade.page.pay' => [
            'out_trade_no' => 'require|length:0,64',
            'product_code' => 'require|in:FAST_INSTANT_TRADE_PAY,QUICK_WAP_WAY',
            'total_amount' => 'require|number',
            'subject' => 'require|length:0,256'
        ],
        'alipay.trade.pay' => [
            'out_trade_no' => 'require|length:0,64',
            'auth_code' => 'require|length:0,32',
            'subject' => 'require|length:0,256',
            'scene' => 'require|in:bar_code,wave_code'
        ],
        'alipay.trade.precreate' => [
            'out_trade_no' => 'require|length:0,64',
            'subject' => 'require|length:0,256',
            'total_amount' => 'require|number',
        ],
        'alipay.trade.app.pay' => [
            'total_amount' => 'require|number',
            'out_trade_no' => 'require|length:0,64',
            'subject' => 'require|length:0,256',
        ],
        'alipay.trade.wap.pay' => [
            'total_amount' => 'require|number',
            'out_trade_no' => 'require|length:0,64',
            'subject' => 'require|length:0,256',
            'product_code' => 'require|in:FAST_INSTANT_TRADE_PAY,QUICK_WAP_WAY',
            'quit_url' => 'require|length:0,255',
        ],
        'alipay.trade.create' => [
            'total_amount' => 'require|number',
            'out_trade_no' => 'require|length:0,64',
            'subject' => 'require|length:0,256',
        ],
        'alipay.trade.query' => [
            'out_trade_no' => 'require|length:0,64',
        ],
        'alipay.trade.cancel' => [
            'out_trade_no' => 'require|length:0,64',
        ],
        'alipay.trade.close' => [
            'out_trade_no' => 'require|length:0,64',
        ],
        'alipay.trade.refund' => [
            'out_trade_no' => 'require|length:0,64',
            'refund_amount' => 'require|number',
        ],
        'alipay.trade.page.refund' => [
            'out_trade_no' => 'require|length:0,64',
            'refund_amount' => 'require|number',
            'out_request_no' => 'require|length:0,64',
        ],
        'alipay.trade.fastpay.refund.query' => [
            'out_trade_no' => 'require|length:0,64',
            'out_request_no' => 'require|length:0,64',
        ],
        'alipay.trade.order.settle' => [
            'out_request_no' => 'require|length:0,64',
            'royalty_parameters' => 'require|array'
        ],
        'alipay.fund.auth.order.freeze' => [
            'out_trade_no' => 'require|length:0,64',
            'out_request_no' => 'require|length:0,64',
            'auth_code_type' => 'require|in:bar_code,security_code',
            'out_order_no' => 'require|length:0,64',
            'order_title' => 'require|length:0,100',
            'amount' => 'require|number',
            'product_code' => 'require|in:FAST_INSTANT_TRADE_PAY,QUICK_WAP_WAY,PRE_AUTH,OVERSEAS_INSTORE_AUTH'
        ],
        'alipay.trade.orderinfo.sync' => [
            'trade_no' => 'require|length:0,64',
            'biz_type' => 'require|in:CREDIT_AUTH,CREDIT_DEDUCT',
            'out_request_no' => 'require|length:0,64',
        ],
        'alipay.trade.advance.consult' => [
            'out_trade_no' => 'require|length:0,64',
            'alipay_user_id' => 'require|length:0,32',
            'consult_scene' => 'require|in:ORDER_RISK_EVALUATION',
            'agreement_no' => 'require|length:0,64'
        ],
        'koubei.trade.order.aggregate.consult' => [
            'shop_id' => 'require|length:0,28',
            'total_amount' => 'require|number',
        ],
        'alipay.pcredit.huabei.auth.settle.apply' => [
            'agreement_no' => 'require|length:0,64',
            'pay_amount' => 'require|number',
            'alipay_user_id' => 'require|length:0,32',
            'out_request_no' => 'require|length:0,64',
        ],
        'alipay.commerce.transport.nfccard.send' => [
            'card_no' => 'require|length:0,128',
            'issue_org_no' => 'require|length:0,32',
            'card_status' => 'require|in:FREEZE,CANCEL',
        ],
        'alipay.data.dataservice.ad.data.query' => [
            'biz_token' => 'require|length:0,100',
            'ad_level' => 'require|in:PLAN,GROUP,CREATIVE,USER',
            'start_date' => 'require|dateFormat:Ymd',
            'end_date' => 'require|dateFormat:Ymd',
            'outer_id_list' => 'require|length:0,20000',
        ],
        'alipay.commerce.air.callcenter.trade.apply' => [
            'scene_code' => 'require|length:0,128',
            'op_code' => 'require|length:0,128',
            'channel' => 'require|length:0,128',
            'target_id_type' => 'require|length:0,32',
            'target_id' => 'require|length:0,32',
            'trade_apply_params' => 'require|array',
            'order_detail'
        ],
        'mybank.payment.trade.order.create' => [
            'out_trade_no' => 'require|length:0,64',
            'total_amount' => 'require|number',
            'partner_id' => 'require|length:0,32',
            'pd_code' => 'require|length:0,32',
            'ev_code' => 'require|length:0,32',
            'currency_code' => 'require|length:0,16',
            'recon_related_no' => 'require|length:0,64',
            'goods_info' => 'require|array',
        ],
        'koubei.trade.order.precreate' => [
            'request_id' => 'require|length:0,64',
            'biz_type' => 'require|in:CREDIT_AUTH,CREDIT_DEDUCT,POST_ORDER_PAY',
            'shop_id' => 'require|length:0,64',
            'out_order_no' => 'require|length:0,64',
        ],
        'koubei.trade.itemorder.buy' => [
            'out_order_no' => 'require|length:0,64',
            'subject' => 'require|length:0,256',
            'biz_product' => 'require|length:0,32',
            'biz_scene' => 'require|length:0,32',
            'buyer_id' => 'require|length:0,32',
            'total_amount' => 'require|number',
            'shop_id' => 'require|length:0,64',
            'item_order_details' => 'require|array',
        ],
        'koubei.trade.order.consult' => [
            'request_id' => 'require|length:0,64',
            'user_id' => 'require|length:0,16',
            'total_amount' => 'require|number',
            'shop_id' => 'require|length:0,64',
            'goods_info' => 'require|array',
        ],
        'koubei.trade.itemorder.refund' => [
            'order_no' => 'require|length:0,64',
            'out_request_no' => 'require|length:0,64',
            'refund_infos' => 'require|array',
        ],
        'koubei.trade.itemorder.query' => [
            'order_no' => 'require|length:0,64',
        ],
        'koubei.trade.ticket.ticketcode.send' => [
            'request_id' => 'require|length:0,32',
            'isv_ma_list' => 'require|array',
        ],
        'koubei.trade.ticket.ticketcode.delay' => [
            'request_id' => 'require|length:0,32',
            'order_no' => 'require|length:0,32',
            'end_date' => 'require|dateFormat:Y-m-d H:i:s',
            'ticket_code' => 'require|length:0,12',
            'code_type' => 'require|in:INTERNAL_CODE,EXTERNAL_CODE,INTERNAL_CODE',
        ],
        'koubei.trade.ticket.ticketcode.query' => [
            'ticket_code' => 'require|length:0,12',
            'shop_id' => 'require|length:0,64',
        ],
        'koubei.trade.ticket.ticketcode.cancel' => [
            'request_id' => 'require|length:0,32',
            'request_biz_no' => 'require|length:0,64',
            'ticket_code' => 'require|length:0,32',
            'quantity','order_no','code_type',
        ],

        /*工具类api*/
        'alipay.system.oauth.token' => [
            'grant_type' => 'require|in:authorization_code,refresh_token',
            'code','refresh_token'
        ],
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
        ],
        'web_server_authorize' => [
            'client_id'=>'require|length:0,50',
            'response_type'=>'require|in:code,token',
            'redirect_uri'=>'require|length:0,255',
            'state','view'
        ],
        'client_server_authorize' => [
            'client_id'=>'require|length:0,50',
            'response_type'=>'require|in:code,token',
            'state','view'
        ],
        /*公共参数验证*/
        'commonTaobao' => [
            'method' => 'require|length:0,100',
            'app_key' => 'require|length:0,30',
            'timestamp' => 'require|dateFormat:Y-m-d H:i:s',
            'format','v','partner_id','simplify','target_app_key','sign_method','session',
        ],

        /*用户api*/
        'taobao.appstore.subscribe.get' => [
            'nick'=>'require|length:0,20'
        ],
        'taobao.user.buyer.get' => [
            'fields'=>'require|length:0,255'
        ],
        'taobao.user.seller.get' => [
            'fields'=>'require|length:0,255'
        ],
        'taobao.mixnick.change' => [
            'src_mix_nick'=>'require|length:0,128',
            'src_appkey'=>'require|length:0,50'
        ],
        'taobao.opensecurity.uid.get' => [
            'tb_user_id'=>'require|number'
        ],
        'taobao.opensecurity.isv.uid.get' => [
            'open_uid' => 'require|length:0,50'
        ],
        'taobao.open.account.delete' => [
            'open_account_ids',
            'isv_account_ids'
        ],
        'taobao.open.account.update' => [
            'param_list'
        ],
        'taobao.open.account.create' => [
            'param_list'
        ],
        'taobao.open.account.list' => [
            'open_account_ids',
            'isv_account_ids'
        ],
        'account.aliyuncs.com.GetPubKey.2013-07-01' => [
            'OwnerAppkey'=>'require|length:0,50'
        ],
        'taobao.open.account.search' => [
            'query'=>'require|length:0,225'
        ],
        'taobao.open.account.token.validate' => [
            'param_token'=>'require|length:0,128'
        ],
        'taobao.open.account.token.apply' => [
            'token_timestamp',
            'open_account_id',
            'isv_account_id',
            'uuid',
            'login_state_expire_in',
            'ext'
        ],
        'taobao.open.account.index.find' => [
            'index_type',
            'index_value'
        ],
        'alibaba.aliqin.flow.wallet.check.balance' => [
            'grade_id'=>'require|length:0,30'
        ],
        'taobao.user.avatar.get' => [
            'nick'=>'require|length:0,50'
        ],
        'tmall.service.settleadjustment.modify' => [
            'param_settle_adjustment_request'=>'require|array'
        ],
        'taobao.rdc.aligenius.account.validate' => [

        ],
        'alibaba.interact.ui.video' => [
            'unnamed'
        ],
        'taobao.messageaccount.messsage.mass.send' => [
            'param'
        ],
        'taobao.messageaccount.messsage.reply' => [
            'param0'=>'require|array'
        ],
        'taobao.messageaccount.messsage.normal.send' => [
            'param'
        ],
        'taobao.miniapp.messsage.normal.send' => [
            'param'
        ],
        'taobao.miniapp.messsage.reply' => [
            'param'
        ],
        'taobao.miniapp.userInfo.get' => [

        ],
        'alibaba.ailabs.user.speech.guide' => [
            'query'
        ],
        'taobao.koubei.tribe.open.verify.code.apply' => [
            'phone'=>'require|length:11,11',
            'data_set_id'=>'require|length:0,100',
        ],
        'taobao.koubei.tribe.open.user.query' => [
            'verify_code'=>'require|length:0,10',
            'phone'=>'require|length:11,11',
            'data_set_id'=>'require|length:0,100',
        ],
        'alibaba.beneift.draw' => [
            'app_name'=>'require|length:0,100',
            'ename'=>'require|length:0,100',
            'ip',
        ],
        'alibaba.benefit.send' => [
            'right_ename'=>'require|length:0,100',
            'receiver_id'=>'require|length:0,100',
            'user_type'=>'require|length:0,100',
            'unique_id'=>'require|length:0,100',
            'app_name'=>'require|length:0,100',
            'ip',
        ],
        'taobao.miniapp.user.phone.get' => [

        ],
        'taobao.newretail.division.record.list.get' => [
            'param'=>'require|array'
        ],

        /*淘宝客*/
        'taobao.tbk.item.recommend.get' => [
            'fields'=>'require|length:0,255',
            'num_iid' => 'require|number',
            'count',
            'platform'
        ],
        'taobao.tbk.item.info.get' => [
            'num_iid' => 'require|number',
            'ip',
            'platform'
        ],
        'taobao.tbk.shop.get' => [
            'fields'=>'require|length:0,255',
            'q' => 'require|length:0,255',
            'sort','is_tmall','start_credit',
            'end_credit','start_commission_rate','end_commission_rate',
            'start_total_action','end_total_action','start_auction_count',
            'end_auction_count','platform','page_no','page_size'
        ],
        'taobao.tbk.shop.recommend.get' => [
            'fields'=>'require|length:0,255',
            'user_id' => 'require|number',
            'count','platform'
        ],
        'taobao.tbk.uatm.favorites.item.get' => ['fields'=>'require|length:0,255','favorites_id' => 'require|number','adzone_id' => 'require|number','count','platform'],
        'taobao.tbk.uatm.favorites.get' => ['fields'=>'require|length:0,255','count','platform'],
        'taobao.tbk.ju.tqg.get' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.item.click.extract' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.coupon.get' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.tpwd.create' => ['text'=>'require|length:0,255','url' => 'require|length:0,255','count','platform'],
        'taobao.tbk.content.get' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.dg.newuser.order.get' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.dg.optimus.material' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.dg.material.optional' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.dg.newuser.order.sum' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.content.effect.get' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.dg.vegas.tlj.create' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.activitylink.get' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.sc.activitylink.toolget' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.dg.punish.order.get' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.dg.vegas.tlj.instance.report' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.dg.wish.update' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],
        'taobao.tbk.dg.wish.list' => ['fields'=>'require|length:0,255','num_iid' => 'require|number','count','platform'],

        /*类目api*/
        'taobao.itempropvalues.get' => [],
        'taobao.itemprops.get' => [],
        'taobao.itemcats.get' => [],
        'taobao.itemcats.authorize.get' => [],
        'alibaba.wholesale.category.get' => [],
        'aliexpress.social.discategory.get' => [],

        /*商品api*/
        'taobao.product.get' => [],
        'taobao.products.search' => [],
        'taobao.product.add' => [],
        'taobao.product.img.upload' => [],
        'taobao.product.propimg.upload' => [],
        'taobao.product.update' => [],
        'taobao.products.get' => [],
        'taobao.items.onsale.get' => [],
        'taobao.item.update' => [],
        'taobao.item.add' => [],
        'taobao.item.img.upload' => [],
        'taobao.item.img.delete' => [],
        'taobao.item.propimg.delete' => [],
        'taobao.item.propimg.upload' => [],
        'taobao.item.sku.add' => [],
        'taobao.item.sku.get' => [],
        'taobao.item.sku.update' => [],
        'taobao.item.skus.get' => [],
        'taobao.item.update.delisting' => [],
        'taobao.item.update.listing' => [],
        'taobao.item.delete' => [],
        'taobao.item.joint.img' => [],
        'taobao.item.joint.propimg' => [],
        'taobao.items.inventory.get' => [],
        'taobao.items.custom.get' => [],
        'taobao.skus.custom.get' => [],
        'taobao.item.sku.delete' => [],
        'taobao.aftersale.get' => [],
        'taobao.item.quantity.update' => [],
        'taobao.item.templates.get' => [],
        'taobao.item.price.update' => [],
        'taobao.item.sku.price.update' => [],
        'taobao.ump.promotion.get' => [],
        'taobao.skus.quantity.update' => [],
        'taobao.item.anchor.get' => [],
        'tmall.item.desc.modules.get' => [],
        'taobao.item.barcode.update' => [],
        'tmall.item.schema.add' => [],
        'tmall.item.add.schema.get' => [],
        'tmall.product.add.schema.get' => [],
        'tmall.product.schema.match' => [],
        'tmall.product.schema.add' => [],
        'tmall.product.update.schema.get' => [],
        'tmall.product.schema.update' => [],
        'tmall.item.schema.update' => [],
        'tmall.item.update.schema.get' => [],
        'tmall.product.schema.get' => [],
        'tmall.item.increment.update.schema.get' => [],
        'tmall.item.schema.increment.update' => [],
        'tmall.item.price.update' => [],
        'tmall.item.sizemapping.templates.list' => [],
        'tmall.item.sizemapping.template.get' => [],
        'tmall.item.sizemapping.template.delete' => [],
        'tmall.item.sizemapping.template.update' => [],
        'tmall.item.sizemapping.template.create' => [],
        'alibaba.wholesale.goods.get' => [],
        'alibaba.wholesale.goods.search' => [],
        'taobao.item.seller.get' => [],
        'taobao.items.seller.list.get' => [],
        'tmall.item.outerid.update' => [],
        'tmall.item.shiptime.update' => [],
        'alibaba.wholesale.shippingline.template.init' => [],
        'tmall.item.simpleschema.add' => [],
        'tmall.item.add.simpleschema.get' => [],
        'taobao.item.qualification.display.get' => [],
        'tmall.item.vip.schema.add' => [],
        'tmall.item.vip.schema.update' => [],
        'tmall.item.vip.add.schema.get' => [],
        'tmall.item.simpleschema.update' => [],
        'tmall.item.vip.update.schema.get' => [],
        'tmall.item.quantity.update' => [],
        'tmall.item.update.simpleschema.get' => [],
        'tmall.item.calculate.hscode.get' => [],
        'tmall.item.combine.get' => [],
        'tmall.item.dapei.template.query' => [],
        'taobao.baike.import.zhubao.picture' => [],
        'taobao.baike.import.zhubao.data' => [],
        'tmall.item.hscode.detail.get' => [],
        'alibaba.gpu.add.schema.get' => [],
        'alibaba.gpu.schema.add' => [],
        'alibaba.gpu.update.schema.get' => [],
        'alibaba.gpu.schema.update' => [],
        'alibaba.gpu.schema.catsearch' => [],
        'taobao.item.carturl.get' => [],
        'tmall.item.hscode.audit.results.query' => [],
        'taobao.koubei.tribe.open.item.detail' => [],
        'aliexpress.social.item.promotion' => [],
        'aliexpress.social.item.search' => [],
        'aliexpress.social.item.ranking' => [],
        'taobao.miniapp.items.get' => [],
        'taobao.item.cart.addinfo' => [],

        /*交易API*/
        'taobao.trades.sold.get' => [],
        'taobao.trade.get' => [],
        'taobao.trade.memo.add' => [],
        'taobao.trade.memo.update' => [],
        'taobao.refunds.receive.get' => [],
        'taobao.trade.fullinfo.get' => [],
        'taobao.trade.close' => [],
        'taobao.trades.sold.increment.get' => [],
        'taobao.trade.confirmfee.get' => [],
        'taobao.trade.ordersku.update' => [],
        'taobao.trade.shippingaddress.update' => [],
        'taobao.trade.amount.get' => [],
        'taobao.trade.receivetime.delay' => [],
        'taobao.trade.postage.update' => [],
        'taobao.trade.wtvertical.get' => [],
        'taobao.trades.sold.incrementv.get' => [],
        'taobao.trade.voucher.upload' => [],
        'alibaba.trade.aliance.create' => [],
        'alibaba.wdk.trade.order.query' => [],
        'alibaba.wdk.trade.order.create' => [],
        'alibaba.wdk.trade.order.cancel' => [],
        'alibaba.wdk.trade.refund.create' => [],
        'alibaba.wdk.trade.refund.query' => [],
        'alibaba.wdk.trade.refund.inform' => [],
        'alibaba.omni.saas.order.create' => [],
        'tmall.ascp.orders.sale.create' => [],
        'taobao.rdc.aligenius.ordermsg.update' => [],
        'taobao.rdc.aligenius.order.event.update' => [],
        'tmall.cloudstore.trade.pos.update' => [],
        'cainiao.refund.refundactions.display' => [],
        'cainiao.refund.refundactions.get' => [],
        'cainiao.refund.refundactions.judgement' => [],
        'alibaba.wdk.pos.trade.create' => [],
        'alibaba.wdk.pos.trade.close' => [],
        'alibaba.wdk.pos.trade.query' => [],
        'alibaba.wdk.pos.trade.reverse' => [],
        'alibaba.wdk.pos.trade.pay' => [],
        'alibaba.wdk.trade.discount.bill.get' => [],
        'taobao.open.trades.sold.get' => [],
        'taobao.open.trade.get' => [],
        'taobao.koubei.tribe.open.order.page' => [],

        /*评价API*/
        'taobao.traderates.get' => [],
        'taobao.traderate.add' => [],
        'taobao.traderate.list.add' => [],
        'taobao.traderate.explain.add' => [],
        'taobao.traderate.impr.imprwords.get' => [],
        'tmall.traderate.feeds.get' => [],
        'tmall.traderate.itemtags.get' => [],

        /*店铺API*/
        'taobao.shopcats.list.get' => [],
        'taobao.sellercats.list.get' => [],
        'taobao.sellercats.list.add' => [],
        'taobao.sellercats.list.update' => [],
        'taobao.shop.update' => [],
        'alibaba.interact.sensor.clipbroad' => [],
        'alibaba.interact.windvane.call' => [],
        'alibaba.data.item.get' => [],
        'alibaba.data.coupon.get' => [],
        'alibaba.data.recommond.get' => [],
        'alibaba.taobao.shop.cat.neo.get' => [],
        'taobao.store.followurl.get' => [],
        'taobao.shop.seller.get' => [],
        'taobao.koubei.tribe.open.mall.page' => [],
        'taobao.koubei.tribe.open.mall.get' => [],
        'taobao.koubei.tribe.open.shop.get' => [],
        'taobao.koubei.tribe.open.shop.page' => [],

        /*旺旺API*/
        'taobao.wangwang.eservice.chatpeers.get' => [],
        'taobao.wangwang.abstract.logquery' => [],
        'taobao.wangwang.abstract.getwordlist' => [],
        'taobao.wangwang.abstract.deleteword' => [],
        'taobao.wangwang.abstract.addword' => [],
        'taobao.wangwang.abstract.initialize' => [],
        'taobao.qianniu.kefueval.get' => [],
        'taobao.wangwang.eservice.chatrelation.get' => [],

        /*机票API*/
        'taobao.alitrip.flightchange.add' => [],
        'taobao.alitrip.flightchange.get' => [],
        'taobao.alitrip.ie.agent.shopping.push' => [],
        'alitrip.tripvp.agent.order.issue' => [],
        'alitrip.tripvp.agent.order.get' => [],
        'taobao.alitrip.totoro.auxproduct.delete' => [],
        'taobao.alitrip.totoro.auxproduct.push' => [],
        'taobao.alitrip.ie.agent.refund.new.fillconfirmfee' => [],

        /*ONS消息服务*/
        'taobao.jushita.jms.user.get' => [],
        'taobao.jushita.jms.user.add' => [],
        'taobao.jushita.jms.user.delete' => [],
        'taobao.jushita.jms.group.get' => [],
        'taobao.jushita.jms.group.delete' => [],
        'taobao.jushita.jms.topics.get' => [],

        /*数据API*/
        'yunos.datatech.opendata.get' => [],
        'alibaba.dt.tmllcar.leadsinfo' => [],
        'alibaba.dt.tmllcar.pricevalidate' => [],
        'taobao.koubei.tribe.open.mall.space.list' => [],

        /*酒店API*/
        'taobao.xhotel.order.official.qualification.get' => [],
        'taobao.xhotel.order.offline.settle.cancel' => [],
        'taobao.xhotel.order.hotelsign.query' => [],
        'taobao.xhotel.data.service.seller.serviceindex' => [],
        'taobao.xhotel.data.service.hotel.serviceindex' => [],
        'taobao.xhotel.data.service.order.detail' => [],

        /*聚划算API*/
        'taobao.ju.items.search' => [],

        /*质检品控API*/
        'taobao.qt.report.get' => [],
        'taobao.ts.property.get' => [],
        'taobao.ts.subscribe.get' => [],
        'taobao.qt.report.update' => [],
        'taobao.qt.report.add' => [],
        'taobao.qt.report.delete' => [],
        'taobao.qt.reports.get' => [],

        /*天猫精品库API*/
        'tmall.items.extend.search' => [],
    ];
}