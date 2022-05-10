<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLSrv;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Year extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'DATEPART(year, ' . $this->dateExpression->dispatch($sqlWalker) . ')';
    }
}
