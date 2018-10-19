<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Common\Database;

use Common\IDatabase;

/**
 * Description of MySQL
 *
 * @author niro
 */
class MySQL implements IDatabase{
    function connect($host, $user, $passwd, $dbname) {
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }
    
    function query($sql){
        $res = mysql_query($sql, $this->conn);
        return $res;
    }
    function close() {
        mysql_close($this->conn);
    }
}
