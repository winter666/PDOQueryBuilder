<?php


namespace Serge\PdoQueryBuilder\Builder\Clause;


abstract class AbstractClause
{
    abstract public function push(...$args);
    abstract public function run();
}