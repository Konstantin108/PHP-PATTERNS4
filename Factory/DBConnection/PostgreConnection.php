<?php
namespace app\Factory\DBConnection;

use app\Factory\DBServer\DBServer;
use app\Factory\DBServer\PostgreServer;
use app\Factory\DBRecord\DBRecord;
use app\Factory\DBRecord\PostgreRecord;
use app\Factory\DBQueryBuilder\DBQueryBuilder;
use app\Factory\DBQueryBuilder\PostgreQueryBuilder;
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