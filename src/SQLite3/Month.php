<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLite3;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Month extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'strftime("%m", '.$this->dateExpression->dispatch($sqlWalker).')';
    }
}
