<?php
class Database
{
    private $host     = '172.31.22.43';
    private $username = 'Aarif200587918';
    private $password = 'Y-x3tRY93m';
    private $database = 'Aarif200587918';
    protected $connection;

    public function __construct() {
        if(!$this->connection){
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if($this->connection->connect_error){
                die("Connection failed: " . $this->connection->connect_error);
            }
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>