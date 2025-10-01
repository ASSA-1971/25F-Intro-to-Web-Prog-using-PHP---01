<?php
require_once 'database.php';

class Create extends Database {
    public function __construct() {
        parent::__construct();
    }
    
    public function execute($query) {
        $result = $this->connection->query($query);
        return $result !== false;
    }
    
    public function escape_string($value) {
        return $this->connection->real_escape_string($value);
    }
}
?>