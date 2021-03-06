<?php

namespace paramCheckResult;

/**
 * 通用参数检查结果
 * Class CommonParamCheckResult
 * @package paramCheckResult
 */
class CommonParamCheckResult implements IParamCheckResult {

    /**
     * 设置参数检查结果
     * @param   string $paramName 参数名称
     * @param   object $reason 原因
     * @return mixed
     */
    public function checkFailed($paramName, $reason) {
//        echo '<br>' . '参数 ' . $paramName . ' 非法,原因:' . $reason;
        printf("参数%s校验失败,原因%s\n", $paramName, $reason);
    }
}