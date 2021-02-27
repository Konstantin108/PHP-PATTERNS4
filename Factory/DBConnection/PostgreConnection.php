<?php


class PostgreConnection extends DBConnection
{
    protected function createServer(): DBServer
    {
        echo 'Настройка сервера базы данных Postgre' . '<br>';
        return new PostgreServer();
    }

    protected function createRecord(): DBRecord
    {
        return new PostgreRecord();
    }

    protected function createQueryBuilder(): DBQueryBuilder
    {
        return new PostgreQueryBuilder();
    }
}