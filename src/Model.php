<?php


namespace Serge\PdoQueryBuilder;


use Serge\PdoQueryBuilder\Builder\Query;

abstract class Model extends Query
{
    protected static string $table = '';
    protected function getTable(): string {
        return static::$table;
    }
}