<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLite3;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class WeekOfYear extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker)
    {
        return 'strftime("%W", '.$this->dateExpression->dispatch($sqlWalker).')';
    }
}
