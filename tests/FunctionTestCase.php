<?php

namespace Nanaweb\Doctrine\DateFunctionExtension;

use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\SqlWalker;
use PHPUnit\Framework\TestCase;

class FunctionTestCase extends TestCase
{
    protected function createExpressionMock(): Node
    {
        $expression = $this->createMock(Node::class);
        $expression
            ->expects($this->once())
            ->method('dispatch')
            ->with($this->isInstanceOf(SqlWalker::class))
            ->will($this->returnValue('{DATE EXPRESSION}'))
        ;

        return $expression;
    }

    protected function createSqlWalkerMock(): SqlWalker
    {
        return $this->getMockBuilder(SqlWalker::class)->disableOriginalConstructor()->getMock();
    }
}
