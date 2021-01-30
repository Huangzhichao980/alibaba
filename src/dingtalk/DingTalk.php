<?php


namespace panthsoni\alibaba\dingtalk;


use panthsoni\alibaba\dingtalk\lib\DingTalkClient;

class DingTalk
{
    protected static $options = [];
    public function __construct(array $options=[]){
        self::$options = array_merge(self::$options,$options);
    }

    /**
     * 初始化
     * @param array $options
     * @return DingTalkClient
     */
    public static function init(array $options=[]){
        self::$options = array_merge(self::$options,$options);
        return new DingTalkClient(self::$options);
    }
}