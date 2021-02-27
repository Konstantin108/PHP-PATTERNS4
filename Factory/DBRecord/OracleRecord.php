<?php
namespace app\Factory\DBRecord;

class OracleRecord extends DBRecord
{
    public function record()
    {
        return 'Производится запись в базу данных Oracle' . '<br><hr>';
    }
}