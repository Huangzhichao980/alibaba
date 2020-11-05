<?php
namespace panthsoni\alibaba\pay\lib;


class PayApi
{
    protected static $methodList = [
        /*支付api*/
        'alipay.trade.page.pay' => [
            'is_auth' => false
        ], //统一收单下单并支付页面接口
        'alipay.trade.pay' => [
            'is_auth' => false
        ], //统一收单交易支付接口
        'alipay.trade.precreate' => [
            'is_auth' => false
        ], //统一收单线下交易预创建
        'alipay.trade.app.pay' => [
            'is_auth' => false
        ], //app支付接口2.0
        'alipay.trade.wap.pay' => [
            'is_auth' => false
        ], //手机网站支付接口2.0
        'alipay.trade.create' => [
            'is_auth' => false
        ], //统一收单交易创建接口
        'alipay.trade.query' => [
            'is_auth' => false
        ], //统一收单线下交易查询
        'alipay.trade.cancel' => [
            'is_auth' => false
        ], //统一收单交易撤销接口
        'alipay.trade.close' => [
            'is_auth' => false
        ], //统一收单交易关闭接口
        'alipay.trade.refund' => [
            'is_auth' => false
        ], //统一收单交易退款接口
        'alipay.trade.page.refund' => [
            'is_auth' => false
        ], //统一收单退款页面接口
        'alipay.trade.fastpay.refund.query' => [
            'is_auth' => false
        ], //统一收单交易退款查询
        'alipay.trade.order.settle' => [
            'is_auth' => false
        ], //统一收单交易结算接口
        'alipay.fund.auth.order.freeze' => [
            'is_auth' => false
        ], //资金授权冻结接口
        'alipay.trade.orderinfo.sync' => [
            'is_auth' => false
        ], //支付宝订单信息同步接口
        'alipay.trade.advance.consult' => [
            'is_auth' => false
        ], //订单咨询服务
        'koubei.trade.order.aggregate.consult' => [
            'is_auth' => false
        ], //聚合支付订单咨询服务
        'alipay.pcredit.huabei.auth.settle.apply' => [
            'is_auth' => false
        ], //花呗先享会员结算申请
        'alipay.commerce.transport.nfccard.send' => [
            'is_auth' => false
        ], //NFC用户卡信息同步
        'alipay.data.dataservice.ad.data.query' => [
            'is_auth' => false
        ], //广告投放数据查询
        'alipay.commerce.air.callcenter.trade.apply' => [
            'is_auth' => false
        ], //航司电话订票待申请接口
        'mybank.payment.trade.order.create' => [
            'is_auth' => false
        ], //网商银行全渠道收单业务订单创建
        'koubei.trade.order.precreate' => [
            'is_auth' => false
        ], //口碑订单预下单
        'koubei.trade.itemorder.buy' => [
            'is_auth' => false
        ], //口碑商品交易购买接口
        'koubei.trade.order.consult' => [
            'is_auth' => false
        ], //口碑订单预咨询
        'koubei.trade.itemorder.refund' => [
            'is_auth' => false
        ], //口碑商品交易退货接口
        'koubei.trade.itemorder.query' => [
            'is_auth' => false
        ], //口碑商品交易查询接口
        'koubei.trade.ticket.ticketcode.send' => [
            'is_auth' => false
        ], //码商发码成功回调接口
        'koubei.trade.ticket.ticketcode.delay' => [
            'is_auth' => false
        ], //口碑凭证延期接口
        'koubei.trade.ticket.ticketcode.query' => [
            'is_auth' => false
        ], //口碑凭证码查询
        'koubei.trade.ticket.ticketcode.cancel' => [
            'is_auth' => false
        ], //口碑凭证码撤销核销

        /*会员api*/
        'alipay.user.info.share' => [
            'is_auth' => true
        ], //支付宝会员授权信息查询接口

        /*工具类api*/
        'alipay.system.oauth.token' => [
            'is_auth' => false,
            'wip_biz_content' => true
        ], //换取授权访问令牌
    ];
}