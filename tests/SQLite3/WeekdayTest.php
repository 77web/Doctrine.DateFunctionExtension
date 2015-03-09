<?php


namespace Nanaweb\Doctrine\DateFunctionExtension\SQLite3;


use Nanaweb\Doctrine\DateFunctionExtension\FunctionTestCase;

class WeekdayTest extends FunctionTestCase
{
    public function test_getSql()
    {
        $functionClass = new Weekday('weekday');

        $functionClass->dateExpression = $this->createExpressionMock();
        $result = $functionClass->getSql($this->createSqlWalkerMock());

        $this->assertEquals('strftime("%w", {DATE EXPRESSION})', $result);
    }
}
