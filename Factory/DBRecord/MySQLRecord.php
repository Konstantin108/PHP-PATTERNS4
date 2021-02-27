<?php


class MySQLRecord extends DBRecord
{
    public function record()
    {
        return 'Производится запись в базу данных MySQL' . '<br><hr>';
    }
}