<?php


class PostgreRecord extends DBRecord
{
    public function record()
    {
        return 'Производится запись в базу данных Postgre' . '<br><hr>';
    }
}