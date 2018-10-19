<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common;

/**
 * Description of Register
 *
 * @author niro
 */
class Register {
    protected static  $object;
    static function set($alias, $object){
        self::$object[$alias] = $object;
    }
    static function get($alias){
        if(isset(self::$object[$alias])){
            return self::$object[$alias];
        } else {
            echo '您要找的对象实例不存在哦<br>';
        }
        
    }
    static function _unset($alias){
        unset(self::$object[$alias]);
    }
}
