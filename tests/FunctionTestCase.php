<?php


namespace Nanaweb\Doctrine\DateFunctionExtension;


class FunctionTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|\Doctrine\ORM\Query\AST\Node
     */
    protected function createExpressionMock()
    {
        $expression = $this->getMock('Doctrine\ORM\Query\AST\Node');
        $expression
            ->expects($this->once())
            ->method('dispatch')
            ->with($this->isInstanceOf('Doctrine\ORM\Query\SqlWalker'))
            ->will($this->returnValue('{DATE EXPRESSION}'))
        ;

        return $expression;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|\Doctrine\ORM\Query\SqlWalker
     */
    protected function createSqlWalkerMock()
    {
        return $this->getMockBuilder('Doctrine\ORM\Query\SqlWalker')->disableOriginalConstructor()->getMock();
    }
}
