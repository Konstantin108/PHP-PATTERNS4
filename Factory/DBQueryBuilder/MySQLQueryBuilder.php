<?php


class MySQLQueryBuilder extends DBQueryBuilder
{
    public function queryBuilder()
    {
        return 'Отправлен запрос к базе данных MySQL' . '<br><hr><br>';
    }
}