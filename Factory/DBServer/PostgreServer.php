<?php
namespace app\Factory\DBServer;

class PostgreServer extends DBServer
{
    public function connect()
    {
        echo 'Подключение к СУБД Postgre' . '<br>';
    }
}