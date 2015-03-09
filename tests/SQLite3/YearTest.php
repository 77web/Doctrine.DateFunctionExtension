<?php


namespace Nanaweb\Doctrine\DateFunctionExtension\SQLite3;


use Nanaweb\Doctrine\DateFunctionExtension\FunctionTestCase;

class YearTest extends FunctionTestCase
{
    public function test_getSql()
    {
        $functionClass = new Year('year');

        $functionClass->dateExpression = $this->createExpressionMock();
        $result = $functionClass->getSql($this->createSqlWalkerMock());

        $this->assertEquals('strftime("%Y", {DATE EXPRESSION})', $result);
    }
}
