<?php


class OracleQueryBuilder extends DBQueryBuilder
{
    public function queryBuilder()
    {
        return 'Отправлен запрос к базе данных Oracle' . '<br><hr><br>';
    }
}