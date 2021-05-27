<?php


namespace panthsoni\alibaba\common;


class CommonApi
{
    protected static $methodList = [
        /**
         * 钉钉相关接口
         */
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

        /*获取第三方企业应用的suite_access_token*/
        'get_suite_token' => [
            'request_way' => 'POST',
            'request_uri' => '/service/get_suite_token'
        ],

        /*获取jsapi_ticket*/
        'get_jsapi_ticket' => [
            'request_way' => 'GET',
            'request_uri' => '/get_jsapi_ticket?access_token=[access_token]'
        ],

        /*获取微应用后台免登的access_token*/
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

        /*通过免登码获取用户信息*/
        'getuserinfo_nologin' => [
            'request_way' => 'GET',
            'request_uri' => '/user/getuserinfo?access_token=[access_token]&code=[code]'
        ],

        /*通过免登码获取用户信息(v2)*/
        'getuserinfo_nologin2' => [
            'request_way' => 'POST',
            'request_uri' => '/topapi/v2/user/getuserinfo'
        ],

        /*获取应用管理员的身份信息*/
        'get_manager_info' => [
            'request_way' => 'GET',
            'request_uri' => '/sso/getuserinfo?code=[code]&access_token=[access_token]'
        ],

        /*根据sns临时授权码获取用户信息*/
        'getuserinfo_bycode' => [
            'request_way' => 'POST',
            'request_uri' => '/sns/getuserinfo_bycode?timestamp=[timestamp]&accessKey=[accessKey]&signature=[signature]'
        ],

        /*获取通讯录权限范围*/
        'get_address_book_permissions' => [
            'request_way' => 'GET',
            'request_uri' => '/auth/scopes?access_token=[access_token]'
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

        /*获取部门列表*/
        'get_department_list' => [
            'request_way' => 'POST',
            'request_uri' => '/topapi/v2/department/listsub'
        ],

        /*获取角色列表*/
        'get_role_list' => [
            'request_way' => 'POST',
            'request_uri' => '/topapi/v2/department/listsub'
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


        /**
         * 支付相关接口
         */
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


        /**
         * 淘宝相关api
         */
        /**
         * 用户相关API
         */
        /*用户web_server授权*/
        'web_server_authorize' => [
            'is_need_auth' => false,
            'request_uri' => '/authorize'
        ],
        /*用户web_server授权*/
        'client_server_authorize' => [
            'is_need_auth' => false,
            'request_uri' => '/authorize'
        ],
        /*查询appstore应用订购关系*/
        'taobao.appstore.subscribe.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*查询买家信息API*/
        'taobao.user.buyer.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*查询卖家用户信息*/
        'taobao.user.seller.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*新旧mixnick互转*/
        'taobao.mixnick.change' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝open security uid 获取接口*/
        'taobao.opensecurity.uid.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取open security uid for isv*/
        'taobao.opensecurity.isv.uid.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*OpenAccount删除数据*/
        'taobao.open.account.delete' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*Open Account数据更新*/
        'taobao.open.account.update' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*Open Account导入数据*/
        'taobao.open.account.create' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*OpenAccount账号信息查询*/
        'taobao.open.account.list' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取用户公钥*/
        'account.aliyuncs.com.GetPubKey.2013-07-01' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*open account数据搜索*/
        'taobao.open.account.search' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*open account token验证*/
        'taobao.open.account.token.validate' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*申请免登Open Account Token*/
        'taobao.open.account.token.apply' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*商家预存余额检查*/
        'alibaba.aliqin.flow.wallet.check.balance' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝用户头像查询*/
        'taobao.user.avatar.get' => [
            'is_back_url' => true,
            'request_uri' => '/router/rest'
        ],
        /*修改结算调整单*/
        'tmall.service.settleadjustment.modify' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*AG商家账号校验*/
        'taobao.rdc.aligenius.account.validate' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*视频播放*/
        'alibaba.interact.ui.video' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*消息号开放-消息群发*/
        'taobao.messageaccount.messsage.mass.send' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*消息号下行回复接口*/
        'taobao.messageaccount.messsage.reply' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*下行普通消息*/
        'taobao.messageaccount.messsage.normal.send' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*轻店铺下行普通消息给用户*/
        'taobao.miniapp.messsage.normal.send' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*轻店铺下行回复接口*/
        'taobao.miniapp.messsage.reply' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*用户开放信息获取*/
        'taobao.miniapp.userInfo.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*引导语推荐接口*/
        'alibaba.ailabs.user.speech.guide' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*口碑综合体手机号获取验证码*/
        'taobao.koubei.tribe.open.verify.code.apply' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取用户openId*/
        'taobao.koubei.tribe.open.user.query' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*抽奖接口*/
        'alibaba.beneift.draw' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*发奖接口*/
        'alibaba.benefit.send' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取当前授权用户手机号码*/
        'taobao.miniapp.user.phone.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*导购分佣明细列表*/
        'taobao.newretail.division.record.list.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],


        /**
         * 淘宝客相关接口
         */
        /*淘宝客-公用-商品关联推荐*/
        'taobao.tbk.item.recommend.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-公用-淘宝客商品详情查询(简版)*/
        'taobao.tbk.item.info.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-店铺搜索*/
        'taobao.tbk.shop.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /* 淘宝客-公用-店铺关联推荐*/
        'taobao.tbk.shop.recommend.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /* 淘宝客-推广者-选品库宝贝信息*/
        'taobao.tbk.uatm.favorites.item.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-选品库宝贝列表*/
        'taobao.tbk.uatm.favorites.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘抢购api*/
        'taobao.tbk.ju.tqg.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-公用-链接解析出商品id*/
        'taobao.tbk.item.click.extract' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-公用-阿里妈妈推广券详情查询*/
        'taobao.tbk.coupon.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-公用-淘口令生成*/
        'taobao.tbk.tpwd.create' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-图文内容输出*/
        'taobao.tbk.content.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-新用户订单明细查询*/
        'taobao.tbk.dg.newuser.order.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-物料精选*/
        'taobao.tbk.dg.optimus.material' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-物料搜索*/
        'taobao.tbk.dg.material.optional' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-拉新活动对应数据查询*/
        'taobao.tbk.dg.newuser.order.sum' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-图文内容效果数据*/
        'taobao.tbk.content.effect.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-淘礼金创建*/
        'taobao.tbk.dg.vegas.tlj.create' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-官方活动转链*/
        'taobao.tbk.activitylink.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-服务商-官方活动转链*/
        'taobao.tbk.sc.activitylink.toolget' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-处罚订单查询*/
        'taobao.tbk.dg.punish.order.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝客-推广者-淘礼金发放及使用报表*/
        'taobao.tbk.dg.vegas.tlj.instance.report' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*媒体导购单选品*/
        'taobao.tbk.dg.wish.update' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*媒体淘客导购单查询*/
        'taobao.tbk.dg.wish.list' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],


        /**
         * 类目API
         */
        /*获取标准类目属性值*/
        'taobao.itempropvalues.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取标准商品类目属性*/
        'taobao.itemprops.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取后台供卖家发布商品的标准商品类目*/
        'taobao.itemcats.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*查询商家被授权品牌列表和类目列表*/
        'taobao.itemcats.authorize.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取类目信息*/
        'alibaba.wholesale.category.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*展示类目获取接口*/
        'aliexpress.social.discategory.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],


        /**
         * 商品API
         */
        /*获取一个产品的信息*/
        'taobao.product.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*搜索产品信息*/
        'taobao.products.search' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*上传一个产品，不包括产品非主图和属性图片*/
        'taobao.product.add' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*上传单张产品非主图，如果需要传多张，可调多次*/
        'taobao.product.img.upload' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*上传单张产品属性图片，如果需要传多张，可调多次*/
        'taobao.product.propimg.upload' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*修改一个产品，可以修改主图，不能修改子图片*/
        'taobao.product.update' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取产品列表*/
        'taobao.products.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取当前会话用户出售中的商品列表*/
        'taobao.items.onsale.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更新商品信息*/
        'taobao.item.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*添加一个商品*/
        'taobao.item.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*添加商品图片*/
        'taobao.item.img.upload' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*删除商品图片*/
        'taobao.item.img.delete' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*删除属性图片*/
        'taobao.item.propimg.delete' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*添加或修改属性图片*/
        'taobao.item.propimg.upload' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*添加SKU*/
        'taobao.item.sku.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取SKU*/
        'taobao.item.sku.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更新SKU信息*/
        'taobao.item.sku.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*根据商品ID列表获取SKU信息*/
        'taobao.item.skus.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*商品下架*/
        'taobao.item.update.delisting' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*一口价商品上架*/
        'taobao.item.update.listing' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*删除单条商品*/
        'taobao.item.delete' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*商品关联子图*/
        'taobao.item.joint.img' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*商品关联属性图*/
        'taobao.item.joint.propimg' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*得到当前会话用户库存中的商品列表*/
        'taobao.items.inventory.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*根据外部ID取商品*/
        'taobao.items.custom.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*根据外部ID取商品SKU*/
        'taobao.skus.custom.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*删除SKU*/
        'taobao.item.sku.delete' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*查询用户售后服务模板*/
        'taobao.aftersale.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*宝贝/SKU库存修改*/
        'taobao.item.quantity.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取用户宝贝详情页模板名称*/
        'taobao.item.templates.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更新商品价格*/
        'taobao.item.price.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更新商品SKU的价格*/
        'taobao.item.sku.price.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*商品优惠详情查询*/
        'taobao.ump.promotion.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*SKU库存修改*/
        'taobao.skus.quantity.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取可用宝贝描述规范化模块*/
        'taobao.item.anchor.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*商品描述模块信息获取*/
        'tmall.item.desc.modules.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*更新商品条形码信息*/
        'taobao.item.barcode.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫根据规则发布商品*/
        'tmall.item.schema.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫发布商品规则获取*/
        'tmall.item.add.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*产品发布规则获取接口*/
        'tmall.product.add.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取匹配产品规则*/
        'tmall.product.match.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*product匹配接口*/
        'tmall.product.schema.match' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*使用Schema文件发布一个产品*/
        'tmall.product.schema.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*产品更新规则获取接口*/
        'tmall.product.update.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*产品更新接口*/
        'tmall.product.schema.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫根据规则编辑商品*/
        'tmall.item.schema.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫编辑商品规则获取*/
        'tmall.item.update.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*产品信息获取schema获取*/
        'tmall.product.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫增量更新商品规则获取*/
        'tmall.item.increment.update.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫根据规则增量更新商品*/
        'tmall.item.schema.increment.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫商品/SKU价格更新接口*/
        'tmall.item.price.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取天猫商品尺码表模板列表*/
        'tmall.item.sizemapping.templates.list' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取天猫商品尺码表模板*/
        'tmall.item.sizemapping.template.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*删除天猫商品尺码表模板*/
        'tmall.item.sizemapping.template.delete' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更新天猫商品尺码表模板*/
        'tmall.item.sizemapping.template.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*新增天猫商品尺码表模板*/
        'tmall.item.sizemapping.template.create' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*查询阿里巴巴批发市场商品详情*/
        'alibaba.wholesale.goods.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*批发市场产品搜索*/
        'alibaba.wholesale.goods.search' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取单个商品详细信息*/
        'taobao.item.seller.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*批量获取商品详细信息*/
        'taobao.items.seller.list.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫商品/SKU商家编码更新接口*/
        'tmall.item.outerid.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更新商品发货时间*/
        'tmall.item.shiptime.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*创建初始模板*/
        'alibaba.wholesale.shippingline.template.init' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫简化发布商品*/
        'tmall.item.simpleschema.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫发布商品规则获取*/
        'tmall.item.add.simpleschema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*资质采集配置异步获取接口*/
        'taobao.item.qualification.display.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*大商家商品发布接口*/
        'tmall.item.vip.schema.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*大商家商品编辑接口*/
        'tmall.item.vip.schema.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*vip商家发布商品的获取规则接口*/
        'tmall.item.vip.add.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫简化编辑商品*/
        'tmall.item.simpleschema.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*vip商家编辑商品的规则获取接口*/
        'tmall.item.vip.update.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*天猫商品/SKU库存更新接口*/
        'tmall.item.quantity.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*官网同购编辑商品的get接口*/
        'tmall.item.update.simpleschema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*算法获取hscode*/
        'tmall.item.calculate.hscode.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*组合商品获取接口*/
        'tmall.item.combine.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*搭配查询接口*/
        'tmall.item.dapei.template.query' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*百科图片数据导入*/
        'taobao.baike.import.zhubao.picture' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*导入数据到商品百科服务*/
        'taobao.baike.import.zhubao.data' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*通过hscode获取计量单位*/
        'tmall.item.hscode.detail.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取产品发布规则接口*/
        'alibaba.gpu.add.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*使用schema文件发布产品*/
        'alibaba.gpu.schema.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取产品编辑schema规则的接口*/
        'alibaba.gpu.update.schema.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*产品更新接口*/
        'alibaba.gpu.schema.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*按类目查询spu接口*/
        'alibaba.gpu.schema.catsearch' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*加购URL获取*/
        'taobao.item.carturl.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*查询店铺下商品和券的信息*/
        'taobao.koubei.tribe.open.item.lists' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*商品hscode信息审核状态查询接口*/
        'tmall.item.hscode.audit.results.query' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*查询口碑综合体商品详情信息*/
        'taobao.koubei.tribe.open.item.detail' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取推广链接*/
        'aliexpress.social.item.promotion' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*AE社交选品*/
        'aliexpress.social.item.search' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*社交排行榜*/
        'aliexpress.social.item.ranking' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*批量获取商品信息*/
        'taobao.miniapp.items.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*购物车添加C2B定制信息*/
        'taobao.item.cart.addinfo' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],


        /**
         * 交易API
         */
        /*查询卖家已卖出的交易数据（根据创建时间）*/
        'taobao.trades.sold.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取单笔交易的部分信息(性能高)*/
        'taobao.trade.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*对一笔交易添加备注*/
        'taobao.trade.memo.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*修改交易备注*/
        'taobao.trade.memo.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*查询卖家收到的退款列表*/
        'taobao.refunds.receive.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取单笔交易的详细信息*/
        'taobao.trade.fullinfo.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*卖家关闭一笔交易*/
        'taobao.trade.close' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*查询卖家已卖出的增量交易数据（根据修改时间）*/
        'taobao.trades.sold.increment.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取交易确认收货费用*/
        'taobao.trade.confirmfee.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更新交易的销售属性*/
        'taobao.trade.ordersku.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更改交易的收货地址*/
        'taobao.trade.shippingaddress.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*交易帐务查询*/
        'taobao.trade.amount.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*延长交易收货时间*/
        'taobao.trade.receivetime.delay' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*修改交易邮费价格*/
        'taobao.trade.postage.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*网厅垂直信息查询接口*/
        'taobao.trade.wtvertical.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*查询卖家已卖出的增量交易数据（根据入库时间）*/
        'taobao.trades.sold.incrementv.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*淘宝交易凭证上传*/
        'taobao.trade.voucher.upload' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*推客平台订单回流*/
        'alibaba.trade.aliance.create' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /* 查询外部交易订单接口*/
        'alibaba.wdk.trade.order.query' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*外部交易订单创单接口*/
        'alibaba.wdk.trade.order.create' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*外部交易订单取消接口*/
        'alibaba.wdk.trade.order.cancel' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*外部渠道逆向订单创建*/
        'alibaba.wdk.trade.refund.create' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*外部渠道查询退货订单详情接口*/
        'alibaba.wdk.trade.refund.query' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*外部渠道通知淘鲜达退款成功接口*/
        'alibaba.wdk.trade.refund.inform' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*订单创建接口*/
        'alibaba.omni.saas.order.create' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*ASCP渠道中心销售单创建接口*/
        'tmall.ascp.orders.sale.create' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*订单消息状态回传*/
        'taobao.rdc.aligenius.ordermsg.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /* erp订单相关状态变更信息回传*/
        'taobao.rdc.aligenius.order.event.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*pos单号回传*/
        'tmall.cloudstore.trade.pos.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*退货退款操作的展示信息(展现给买家)*/
        'cainiao.refund.refundactions.display' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*判断该订单能执行的逆向操作集合列表*/
        'cainiao.refund.refundactions.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*判断当前用户是否能对订单执行一些逆向操作，比如退货操作*/
        'cainiao.refund.refundactions.judgement' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*轻pos品牌营销下单接口*/
        'alibaba.wdk.pos.trade.create' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*轻pos品牌营销关单接口*/
        'alibaba.wdk.pos.trade.close' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*轻pos品牌营销查询接口*/
        'alibaba.wdk.pos.trade.query' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*轻pos品牌营销退款接口*/
        'alibaba.wdk.pos.trade.reverse' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*轻pos品牌营销支付接口*/
        'alibaba.wdk.pos.trade.pay' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*订单优惠账单查询*/
        'alibaba.wdk.trade.discount.bill.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*查询卖家已卖出的交易数据（商家应用使用）*/
        'taobao.open.trades.sold.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取单笔交易的部分信息(商家应用使用)*/
        'taobao.open.trade.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*口碑综合体订单列表信息查询*/
        'taobao.koubei.tribe.open.order.page' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],


        /**
         * 评价API
         */
        /*搜索评价信息*/
        'taobao.traderates.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*新增单个评价*/
        'taobao.traderate.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*针对父子订单新增批量评价*/
        'taobao.traderate.list.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*商城评价解释接口*/
        'taobao.traderate.explain.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*评价大家印象印象短语接口*/
        'taobao.traderate.impr.imprwords.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*查询子订单对应的评价、追评以及语义标签*/
        'tmall.traderate.feeds.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*通过商品ID获取标签列表*/
        'tmall.traderate.itemtags.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],


        /**
         * 店铺API
         */
        /*获取前台展示的店铺类目*/
        'taobao.shopcats.list.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取前台展示的店铺内卖家自定义商品类目*/
        'taobao.sellercats.list.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*添加卖家自定义类目*/
        'taobao.sellercats.list.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更新卖家自定义类目*/
        'taobao.sellercats.list.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*更新店铺基本信息*/
        'taobao.shop.update' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*Weex页面设置或读取剪切板*/
        'alibaba.interact.sensor.clipbroad' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*Weex页面调用windvane*/
        'alibaba.interact.windvane.call' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /* 获取商品*/
        'alibaba.data.item.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取优惠券信息*/
        'alibaba.data.coupon.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取推荐信息*/
        'alibaba.data.recommond.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*店铺mtop接口鉴权虚拟api*/
        'alibaba.taobao.shop.cat.neo.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取店铺关注URL*/
        'taobao.store.followurl.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*卖家店铺基础信息查询*/
        'taobao.shop.seller.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*分页获取商圈基本信息*/
        'taobao.koubei.tribe.open.mall.page' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取商圈详细信息*/
        'taobao.koubei.tribe.open.mall.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*获取综合体店铺详细信息*/
        'taobao.koubei.tribe.open.shop.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*分页获取店铺信息*/
        'taobao.koubei.tribe.open.shop.page' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],


        /**
         * 旺旺API
         */
        /*获取聊天对象列表*/
        'taobao.wangwang.eservice.chatpeers.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*聊天记录查询*/
        'taobao.wangwang.abstract.logquery' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取关键词列表*/
        'taobao.wangwang.abstract.getwordlist' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*删除关键词*/
        'taobao.wangwang.abstract.deleteword' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*增加关键词*/
        'taobao.wangwang.abstract.addword' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*模糊查询服务初始化*/
        'taobao.wangwang.abstract.initialize' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*客服评价详情接口*/
        'taobao.qianniu.kefueval.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*聊天关系获取接口*/
        'taobao.wangwang.eservice.chatrelation.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],


        /**
         * 机票API
         */
        /*航变信息录入接口*/
        'taobao.alitrip.flightchange.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取航变信息*/
        'taobao.alitrip.flightchange.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*国际机票大卖家Shopping推送*/
        'taobao.alitrip.ie.agent.shopping.push' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*廉航辅营正向订单出货接口*/
        'alitrip.tripvp.agent.order.issue' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*廉航辅营正向订单查询详情接口*/
        'alitrip.tripvp.agent.order.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*廉航辅营产品删除*/
        'taobao.alitrip.totoro.auxproduct.delete' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*廉航辅营产品投放*/
        'taobao.alitrip.totoro.auxproduct.push' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*新模型-回填申请单费用*/
        'taobao.alitrip.ie.agent.refund.new.fillconfirmfee' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],


        /**
         * ONS消息服务
         */
        /*新模型-查询某个用户是否同步消息*/
        'taobao.jushita.jms.user.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*添加ONS消息同步用户*/
        'taobao.jushita.jms.user.add' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*删除ONS消息同步用户*/
        'taobao.jushita.jms.user.delete' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*查询ONS分组*/
        'taobao.jushita.jms.group.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*删除ONS分组*/
        'taobao.jushita.jms.group.delete' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*根据用户nick获取开通的消息列表*/
        'taobao.jushita.jms.topics.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],


        /**
         * 数据API
         */
        /*YunOS服务平台数据获取通用接口*/
        'yunos.datatech.opendata.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*天猫汽车线索产品潜客数据*/
        'alibaba.dt.tmllcar.leadsinfo' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*线索报价价格校验*/
        'alibaba.dt.tmllcar.pricevalidate' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*查询口碑中合体商圈*/
        'taobao.koubei.tribe.open.mall.space.list' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],


        /**
         * 酒店API
         */
        /*官网信用住用户资质校验*/
        'taobao.xhotel.order.official.qualification.get' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*线下信用住取消结账专用接口*/
        'taobao.xhotel.order.offline.settle.cancel' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*获取直连酒店（客栈）签约上线进度信息*/
        'taobao.xhotel.order.hotelsign.query' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*卖家服务指数查询*/
        'taobao.xhotel.data.service.seller.serviceindex' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*酒店服务指数*/
        'taobao.xhotel.data.service.hotel.serviceindex' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],
        /*服务订单详情*/
        'taobao.xhotel.data.service.order.detail' => [
            'is_need_auth' => true,
            'request_uri' => '/router/rest'
        ],


        /**
         * 聚划算API
         */
        /*聚划算商品搜索接口*/
        'taobao.ju.items.search' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],


        /**
         * 质检品控API
         */
        /*查询质检报告*/
        'taobao.qt.report.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*淘宝服务属性查询*/
        'taobao.ts.property.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /* 淘宝服务订购关系查询*/
        'taobao.ts.subscribe.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*更新质检报告*/
        'taobao.qt.report.update' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*上传质检报告*/
        'taobao.qt.report.add' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*质检报告删除接口*/
        'taobao.qt.report.delete' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
        /*批量查询质检报告*/
        'taobao.qt.reports.get' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],


        /**
         * 天猫精品库API
         */
        /*搜索天猫商品*/
        'tmall.items.extend.search' => [
            'is_need_auth' => false,
            'request_uri' => '/router/rest'
        ],
    ];
}