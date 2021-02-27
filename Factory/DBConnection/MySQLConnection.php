<?php
namespace app\Factory\DBConnection;

use app\Factory\DBServer\DBServer;
use app\Factory\DBServer\MySQLServer;
use app\Factory\DBRecord\DBRecord;
use app\Factory\DBRecord\MySQLRecord;
use app\Factory\DBQueryBuilder\DBQueryBuilder;
use app\Factory\DBQueryBuilder\MySQLQueryBuilder;
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