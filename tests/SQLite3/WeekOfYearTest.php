<?php


namespace Nanaweb\Doctrine\DateFunctionExtension\SQLite3;


use Nanaweb\Doctrine\DateFunctionExtension\FunctionTestCase;

class WeekOfYearTest extends FunctionTestCase
{
    public function test_getSql()
    {
        $functionClass = new WeekOfYear('weekofyear');

        $functionClass->dateExpression = $this->createExpressionMock();
        $result = $functionClass->getSql($this->createSqlWalkerMock());

        $this->assertEquals('strftime("%W", {DATE EXPRESSION})', $result);
    }
}
