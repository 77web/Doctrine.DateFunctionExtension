<?php


namespace Nanaweb\Doctrine\DateFunctionExtension;

use Doctrine\ORM\Query\AST\Functions\FunctionNode as BaseFunctionNode;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;

abstract class FunctionNode extends BaseFunctionNode
{
    /**
     * @var \Doctrine\ORM\Query\AST\Node

     */
    public $dateExpression;

    public function parse(Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);

        $this->dateExpression = $parser->ArithmeticPrimary();

        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
