<?php

namespace Nanaweb\Doctrine\DateFunctionExtension\MySql;

use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\SqlWalker;

class Month
{
    public function getSql(SqlWalker $sqlWalker, Node $dateExpression)
    {
        return 'MONTH('.$dateExpression->dispatch($sqlWalker).')';
    }
}
