<?php

class Database
{
    private $host = 'mysql';

    private $user = 'root';

    private $passwd = 'root';

    private $db = 'virt_books';

    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->passwd, $this->db);
        $this->conn = new mysqli($this->host, $this->user, $this->passwd, $this->db);
        if ($this->conn->connect_error) {
            exit("Connection failed: $this->conn->connect_error");
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }
}
