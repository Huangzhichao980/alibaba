<?php
namespace panthsoni\alibaba\top;

use panthsoni\alibaba\top\lib\TopClient;

class Top
{
    protected static $options = [];
    public function __construct(array $options=[]){
        self::$options = array_merge(self::$options,$options);
    }

    /**
     * 初始化
     * @param array $options
     * @return TopClient
     */
    public static function init(array $options=[]){
        self::$options = array_merge(self::$options,$options);
        return new TopClient(self::$options);
    }
}