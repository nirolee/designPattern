<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common;

/**
 *
 * @author niro
 */
interface IDatabase{
    function connect($host, $user, $passwd, $dbname);
    function query($sql);
    function close();
}
