<?php


namespace Nanaweb\Doctrine\DateFunctionExtension\MySql;


use Nanaweb\Doctrine\DateFunctionExtension\FunctionTestCase;

class YearTest extends FunctionTestCase
{
    public function test_getSql()
    {
        $functionClass = new Year('year');

        $functionClass->dateExpression = $this->createExpressionMock();
        $result = $functionClass->getSql($this->createSqlWalkerMock());

        $this->assertEquals('YEAR({DATE EXPRESSION})', $result);
    }
}
