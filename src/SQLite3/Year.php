<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\SQLite3;

use Doctrine\ORM\Query\SqlWalker;
use Nanaweb\Doctrine\DateFunctionExtension\FunctionNode;

class Year extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker)
    {
        return 'strftime("%Y", '.$this->dateExpression->dispatch($sqlWalker).')';
    }
}
