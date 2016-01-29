<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLSrv;

use Nanaweb\Doctrine\DateFunctionExtension\FunctionTestCase;

class WeekOfYearTest extends FunctionTestCase
{
    public function test_getSql()
    {
        $functionClass = new WeekOfYear('weekofyear');

        $functionClass->dateExpression = $this->createExpressionMock();
        $result                        = $functionClass->getSql($this->createSqlWalkerMock());

        $this->assertEquals('DATEPART(week, {DATE EXPRESSION})', $result);
    }
}
