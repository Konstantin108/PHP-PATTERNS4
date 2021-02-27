<?php


abstract class DBConnection
{
    private $DBServer;
    private $DBRecord;
    private $DBQueryBuilder;

    public function __construct()
    {
        $this->DBServer = $this->createServer();
        $this->DBRecord = $this->createRecord();
        $this->DBQueryBuilder = $this->createQueryBuilder();
    }

    public function getConnect()
    {
        echo 'Устанавливается соединение с сервером' . '<br>';
        $this->DBServer->connect();
        echo 'Соединение установлено' . '<br>';
        echo $this->DBRecord->record();
    }

    public function getQueryBuilder()
    {
        echo 'Формируется запрос' . '<br>';
        echo $this->DBQueryBuilder->queryBuilder();
    }

    abstract protected function createServer(): DBServer;
    abstract protected function createRecord(): DBRecord;
    abstract protected function createQueryBuilder(): DBQueryBuilder;
}