<?php

namespace paramCheckResult;

use Exception;

/**
 * 参数校验抽象结果自定义异常
 * Created by guozhucheng@baidu.com
 */
class ParamCheckException extends Exception {

    /**
     * 参数名称
     * @var
     */
    private $_paramName;

    /**
     * 自定义构造函数
     * @param string $paramName 参数名称
     * @param int    $messag 异常小时
     */
    public function __construct($paramName, $message) {
        $this->_paramName = $paramName;
        parent:: __construct($message, 0, null);
    }

    /**
     * 获取名称
     * @return mixed
     */
    public function  getName() {
        return $this->_paramName;
    }
}