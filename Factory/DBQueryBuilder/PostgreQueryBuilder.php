<?php


class PostgreQueryBuilder extends DBQueryBuilder
{
    public function queryBuilder()
    {
        return 'Отправлен запрос к базе данных Postgre' . '<br><hr><br>';
    }
}