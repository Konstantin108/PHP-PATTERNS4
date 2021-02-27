<?php
use app\Services\Autoload;
use app\Factory\DBConnection\DBConnection;
use app\Factory\DBConnection\MySQLConnection;
use app\Factory\DBConnection\PostgreConnection;
use app\Factory\DBConnection\OracleConnection;

require dirname(__DIR__) . "/services/Autoload.php";
spl_autoload_register([(new Autoload()), 'load']);

echo '<h1>Домашнее задание №4</h1>';

function start(DBConnection $dbConnection)
{
    $dbConnection->getConnect();
    $dbConnection->getQueryBuilder();
}

start(new MySQLConnection());
start(new PostgreConnection());
start(new OracleConnection());