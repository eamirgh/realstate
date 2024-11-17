<?php

class db
{
    private $host = "localhost";
    private $database = "amlak";
    private $username = "root";
    private $password = "";

    private $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function __destruct()
    {
        $this->db = null;
    }
    public function db(): \PDO
    {
        return $this->db;
    }
}
