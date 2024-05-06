<?php

class Database {
    protected $con;

    public function __construct() {
        try {
            $this->con = new PDO("mysql:host=localhost;dbname=uts_web2_dedesunarwan", "root", "");
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->con;
    }

    public function __destruct() {
        $this->con = null;
    }

}
