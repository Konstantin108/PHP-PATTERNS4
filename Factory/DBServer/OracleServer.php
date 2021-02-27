<?php
namespace app\Factory\DBServer;

class OracleServer extends DBServer
{
    public function connect()
    {
        echo 'Подключение к СУБД Oracle' . '<br>';
    }
}