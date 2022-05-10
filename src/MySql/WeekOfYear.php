<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\MySql;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class WeekOfYear extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'WEEKOFYEAR('.$this->dateExpression->dispatch($sqlWalker).')';
    }
}
