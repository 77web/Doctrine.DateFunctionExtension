<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLSrv;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Weekday extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker)
    {
        // -1 so it is consistent with mysql and sqlite3
        return 'DATEPART(weekday, ' . $this->dateExpression->dispatch($sqlWalker) . ')-1';
    }
}
