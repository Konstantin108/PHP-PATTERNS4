<?php
namespace app\Factory\DBConnection;

use app\Factory\DBServer\DBServer;
use app\Factory\DBServer\OracleServer;
use app\Factory\DBRecord\DBRecord;
use app\Factory\DBRecord\OracleRecord;
use app\Factory\DBQueryBuilder\DBQueryBuilder;
use app\Factory\DBQueryBuilder\OracleQueryBuilder;
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