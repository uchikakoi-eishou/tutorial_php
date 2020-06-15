<?php  

class ConnDB {
    private $dsn = 'sqlsrv:server=minawww3;database=general';
    private $user = 'general';
    private $password = '2017sysmina';

    private $sql;

    public function __construct($sql) {
        $this->sql = $sql;
    }

    public function setSql($sql) {
        $this->sql = $sql;
    }

    public function getQuery() {
        $pdo = new PDO($this->dsn, $this->user, $this->password);
        return $pdo->query($this->sql);
        // return $products->fetch(PDO::FETCH_ASSOC);
    } 

    public function __destruct() {
        $pdo = null;
    }

}