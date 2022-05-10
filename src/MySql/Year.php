<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\MySql;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Year extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'YEAR('.$this->dateExpression->dispatch($sqlWalker).')';
    }
}
