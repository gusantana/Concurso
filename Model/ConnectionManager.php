<?php 

class ConnectionManager extends PDO {
    
    protected $dsn = 'mysql:dbname=concurso;host=127.0.0.1';
    protected $user = 'root';
    protected $pass = 'root';
    
    public function __construct () {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}