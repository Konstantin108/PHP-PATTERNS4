<?php
echo '<h1>Домашнее задание №4</h1>';

require 'Factory/DBConnection/DBConnection.php';
require 'Factory/DBConnection/MySQLConnection.php';
require 'Factory/DBConnection/PostgreConnection.php';
require 'Factory/DBConnection/OracleConnection.php';

require 'Factory/DBServer/DBServer.php';
require 'Factory/DBServer/MySQLServer.php';
require 'Factory/DBServer/PostgreServer.php';
require 'Factory/DBServer/OracleServer.php';

require 'Factory/DBRecord/DBRecord.php';
require 'Factory/DBRecord/MySQLRecord.php';
require 'Factory/DBRecord/PostgreRecord.php';
require 'Factory/DBRecord/OracleRecord.php';

require 'Factory/DBQueryBuilder/DBQueryBuilder.php';
require 'Factory/DBQueryBuilder/MySQLQueryBuilder.php';
require 'Factory/DBQueryBuilder/PostgreQueryBuilder.php';
require 'Factory/DBQueryBuilder/OracleQueryBuilder.php';

function start(DBConnection $dbConnection)
{
    $dbConnection->getConnect();
    $dbConnection->getQueryBuilder();
}

start(new MySQLConnection());
start(new PostgreConnection());
start(new OracleConnection());