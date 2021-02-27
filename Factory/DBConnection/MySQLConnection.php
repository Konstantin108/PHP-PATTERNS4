<?php


class MySQLConnection extends DBConnection
{
    protected function createServer(): DBServer
    {
        echo 'Настройка сервера базы данных MySQL' . '<br>';
        return new MySQLServer();
    }

    protected function createRecord(): DBRecord
    {
        return new MySQLRecord();
    }

    protected function createQueryBuilder(): DBQueryBuilder
    {
        return new MySQLQueryBuilder();
    }
}