<?php


class PostgreServer extends DBServer
{
    public function connect()
    {
        echo 'Подключение к СУБД Postgre' . '<br>';
    }
}