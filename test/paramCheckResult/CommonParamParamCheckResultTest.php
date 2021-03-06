<?php

namespace test\paramCheckResult;

use paramCheckResult\CommonParamCheckResult;
use paramCheckResult\ParamIllegalException;
use PHPUnit_Framework_TestCase;

require_once(__DIR__ . '/../../paramCheckResult/IParamCheckResult.php');
require_once(__DIR__ . '/../../paramCheckResult/CommonParamCheckResult.php');
require_once(__DIR__ . '/../../paramCheckResult/ParamIllegalException.php');


/**
 *  CommonParamParamCheckResult 单元测试
 *  Class CommonParamParamCheckResultTest
 */
class CommonParamParamCheckResultTest extends PHPUnit_Framework_TestCase {

    /**
     * 测试函数 setCheckResult
     */
    public function  testSetCheckResult() {

        try {
            $object = new CommonParamCheckResult();
            $object->checkFailed('paramName', 'reason');

        } catch (ParamIllegalException $exception) {
            //SetCheckResult 函数会抛出异常，断言异常
            $res = new ParamIllegalException('paramName', 'reason');
            $this->assertEquals($res, $exception);

            return;
        }
        //如果未捕获任何异常，则断言失败
        $this->fail();


    }
}
 