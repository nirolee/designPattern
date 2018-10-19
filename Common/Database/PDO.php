<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Common\Database;

use Common\IDatabase;
/**
 * Description of PDO
 *
 * @author niro
 */
class PDO implements IDatabase{
    protected $conn;
    function connect($host, $user, $passwd, $dbname) {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }
    
    function query($sql) {
        return $this->conn->query($sql);
    }
    
    function close() {
        unset($this->conn);
    }
}
