<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLSrv;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class WeekOfYear extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'DATEPART(week, ' . $this->dateExpression->dispatch($sqlWalker) . ')';
    }
}
