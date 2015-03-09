<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\MySql;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Weekday extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker)
    {
        return 'WEEKDAY('.$this->dateExpression->dispatch($sqlWalker).')';
    }
}
