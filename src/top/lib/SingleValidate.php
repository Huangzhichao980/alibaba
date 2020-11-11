<?php
namespace panthsoni\alibaba\top\lib;

use panthsoni\alibaba\common\CommonValidate;

class SingleValidate extends CommonValidate
{
    protected $rule = [
        'method|接口名称method' => 'length:0,100',
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
        'redirect_uri|回调地址redirect_uri' => 'length:0,255',
        'state|应用状态state' => 'length:0,50',
        'view|页面样式view' => 'in:web,tmall,wap',
        'client_secret|客户端密钥client_secret' => 'length:0,255',
        'code|code码' => 'length:0,255',
        'grant_type|授权类型grant_type' => 'length:0,50',
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
    ];

    public $scene = [
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
        'common' => [
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