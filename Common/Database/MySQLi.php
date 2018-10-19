<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Common\Database;

use Common\IDatabase;
/**
 * Description of MySQLi
 *
 * @author niro
 */



class MySQLi implements IDatabase {
    protected $conn;
    
    function connect($host, $user, $passwd, $dbname) {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
    }
    
    function query($sql) {
        return mysqli_query($this->conn, $sql);
    }
    function close() {
        mysqli_close($this->conn);
    }
}
