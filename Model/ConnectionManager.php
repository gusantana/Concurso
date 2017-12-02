<?php 

class ConnectionManager extends PDO {
    
    protected $dsn = 'mysql:dbname=concurso;host=192.168.0.50';
    protected $user = 'guest';
    protected $pass = 'guest';
    
    public function __construct () {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}