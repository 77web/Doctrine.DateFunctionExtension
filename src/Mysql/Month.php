<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\MySql;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Month extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker)
    {
        return 'MONTH('.$this->dateExpression->dispatch($sqlWalker).')';
    }
}
