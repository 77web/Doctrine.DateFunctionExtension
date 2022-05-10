<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\Postgresql;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Year extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'EXTRACT(year from ' . $this->dateExpression->dispatch($sqlWalker) . ')';
    }
}
