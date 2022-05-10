<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLSrv;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Month extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'DATEPART(month, ' . $this->dateExpression->dispatch($sqlWalker) . ')';
    }
}
