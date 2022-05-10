<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\Postgresql;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Month extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'EXTRACT(month from ' . $this->dateExpression->dispatch($sqlWalker) . ')';
    }
}
