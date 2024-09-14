<?php

class Database
{
    private $__conn;
    public function __construct()
    {
        global $dbConfig;
        $this->__conn = Connection::getInstance($dbConfig);
    }

    public function create()
    {

    }
}
