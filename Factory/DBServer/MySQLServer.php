<?php
namespace app\Factory\DBServer;

class MySQLServer extends DBServer
{
    public function connect()
    {
        echo 'Подключение к СУБД MySQL' . '<br>';
    }
}