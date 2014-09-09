<?php
/**
 * Created by guozhucheng@baidu.com
 * DateTime: 14-9-10 上午2:23
 */
namespace aop;

use Exception;
use ParamFilter;

class AopClass {
    private $_instance;

    /**
     * 构造函数
     * @param $instance
     */
    public function __construct($instance) {
        $this->_instance = $instance;
    }

    public function __call($method, $arguments) {
        if (!method_exists($this->_instance, $method)) {
            throw new Exception($method . '方法未定义');
        }
        //执行参数检查
        ParamFilter::paramsCheck(get_class($this->_instance), $method, $arguments);
        $realMethod = array($this->_instance, $method);

        return call_user_func($realMethod, $arguments);
    }
}