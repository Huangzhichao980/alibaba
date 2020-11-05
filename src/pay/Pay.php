<?php
namespace panthsoni\alibaba\pay;

use panthsoni\alibaba\pay\lib\PayClient;

class Pay
{
    protected static $options = [];
    public function __construct(array $options=[]){
        self::$options = array_merge(self::$options,$options);
    }

    /**
     * 初始化
     * @param array $options
     * @return PayClient
     */
    public static function init(array $options=[]){
        self::$options = array_merge(self::$options,$options);
        return new PayClient(self::$options);
    }
}