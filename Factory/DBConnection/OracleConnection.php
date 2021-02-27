<?php


class OracleConnection extends DBConnection
{
    protected function createServer(): DBServer
    {
        echo 'Настройка сервера базы данных Oracle' . '<br>';
        return new OracleServer();
    }

    protected function createRecord(): DBRecord
    {
        return new OracleRecord();
    }

    protected function createQueryBuilder(): DBQueryBuilder
    {
        return new OracleQueryBuilder();
    }
}