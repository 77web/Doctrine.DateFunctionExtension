<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLSrv;

use Nanaweb\Doctrine\DateFunctionExtension\FunctionTestCase;

class MonthTest extends FunctionTestCase
{
    public function test_getSql()
    {
        $functionClass = new Month('month');

        $functionClass->dateExpression = $this->createExpressionMock();
        $result                        = $functionClass->getSql($this->createSqlWalkerMock());

        $this->assertEquals('DATEPART(month, {DATE EXPRESSION})', $result);
    }
}
