<?php

class Database
{
    public $connection;

    public function __construct()
    {
        //charset=utf8nb4;
        $dsn = "mysql:host=localhost;post=3306;dbname=demoapp;user=root;password=root;";

        $this->connection = new PDO($dsn);
    }
    public function query($query)
    {


        $statment = $this->connection->prepare($query);


        $statment->execute();

        return $statment;
    }
}
