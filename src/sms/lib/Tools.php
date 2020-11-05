<?php
namespace panthsoni\alibaba\sms\lib;

use panthsoni\alibaba\common\CommonTools;

class Tools extends CommonTools
{
    public function __construct(){
        parent::__construct();
    }

    /**
     * 手机号码验证
     * @param $value
     * @return bool
     */
    public static function isMobile($value){
        $rule = '/^0?(13|14|15|17|18|16|19)[0-9]{9}$/';
        $result = preg_match($rule, $value);
        if (!$result) return false;
        return true;
    }
}