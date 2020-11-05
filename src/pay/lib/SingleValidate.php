<?php
namespace panthsoni\alibaba\pay\lib;

use panthsoni\alibaba\common\CommonValidate;

class SingleValidate extends CommonValidate
{
    protected $rule = [
        'app_id|应用ID' => 'length:0,32',
        'method|接口名称' => 'length:0,50',
        'format|返回格式' => 'length:0,40',
        'charset|编码格式' => 'in:utf8,gbk,gb2312',
        'sign_type|算法类型' => 'in:RSA2,RSA',
        'version|接口版本' => 'in:1.0',
        'notify_url|通知URL' => 'length:0,255',
        'app_auth_token|授权token' => 'length:0,40',
        'private_key|私钥' => 'length:0,100000000000000',
        'public_key|公钥' => 'length:0,100000000000000',
        'out_trade_no|商户订单号' => 'length:0,64',
        'product_code|销售产品码' => 'in:FAST_INSTANT_TRADE_PAY,QUICK_WAP_WAY,PRE_AUTH,OVERSEAS_INSTORE_AUTH',
        'total_amount|订单总金额' => 'number',
        'subject|订单标题' => 'length:0,256',
        'scene|支付场景' => 'in:bar_code,wave_code',
        'auth_code|授权码' => 'length:0,32',
        'quit_url|用户付款中途退出返回商户网站的地址' => 'length:0,255',
        'trade_no|支付宝交易号' => 'length:0,64',
        'refund_amount|退款金额' => 'number',
        'out_request_no|标识一次退款请求' => 'length:0,64',
        'royalty_parameters|分账明细信息' => 'array',
        'auth_code_type|授权码类型' => 'in:bar_code,security_code',
        'out_order_no|商户授权资金订单号' => 'length:0,64',
        'order_title|业务订单的简单描述' => 'length:0,100',
        'amount|需要冻结的金额' => 'number',
        'biz_type|业务类型' => 'in:CREDIT_AUTH,CREDIT_DEDUCT,POST_ORDER_PAY',
        'alipay_user_id|支付宝用户id' => 'length:0,32',
        'consult_scene|订单咨询类型' => 'in:ORDER_RISK_EVALUATION',
        'agreement_no|用户签约记录的编号' => 'length:0,64',
        'shop_id|口碑门店ID' => 'length:0,28',
        'pay_amount|需要支付的金额' => 'number',
        'issue_org_no|发卡机构代码' => 'length:0,32',
        'card_no|卡号' => 'length:0,128',
        'card_status|卡片状态' => 'in:FREEZE,CANCEL',
        'biz_token|访问token' => 'length:0,100',
        'ad_level|广告层级类型' => 'in:PLAN,GROUP,CREATIVE,USER',
        'start_date|查询开始时间' => 'dateFormat:Ymd',
        'end_date|查询结束时间' => 'dateFormat:Ymd',
        'outer_id_list|对应的外部资源ID' => 'length:0,20000',
        'op_code|用于标识操作模型' => 'length:0,128',
        'channel|接口请求渠道编码' => 'length:0,128',
        'target_id|场景覆盖的目标人群标识' => 'length:0,32',
        'target_id_type|场景覆盖人群id类型' => 'length:0,32',
        'trade_apply_params|交易请求参数' => 'array',
        'order_detail|场景的数据表示' => 'length:0,255',
        'partner_id|网商合作伙伴ID' => 'length:0,32',
        'recon_related_no|对账关联ID' => 'length:0,64',
        'pd_code|业务产品码' => 'length:0,32',
        'ev_code|业务事件码' => 'length:0,32',
        'currency_code|币种值' => 'length:0,16',
        'goods_info|商品信息' => 'array',
        'request_id|请求id' => 'length:0,64',
        'biz_product|业务产品' => 'length:0,32',
        'biz_scene|业务场景' => 'length:0,32',
        'buyer_id|买家支付宝ID' => 'length:0,32',
        'item_order_details|购买商品信息' => 'array',
        'refund_infos|退货明细信息' => 'array',
        'isv_ma_list|需要发送的码列表' => 'array',
        'code_type|码类型' => 'in:INTERNAL_CODE,EXTERNAL_CODE,INTERNAL_CODE',
        'ticket_code|凭证码' => 'length:0,12',
        'request_biz_no|业务请求号' => 'length:0,64',
        'quantity|冲正份数' => 'length:0,4',
        'scope|授权域' => 'length:0,128',
        'redirect_uri|回调地址' => 'length:0,255',
        'state|回调参数' => 'length:0,128',
        'grant_type|授权类型' => 'in:authorization_code,refresh_token',
        'code|授权码' => 'length:0,40',
        'refresh_token|刷新令牌' => 'length:0,40',
    ];

    public $scene = [
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
        ]
    ];
}