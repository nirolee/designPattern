<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');
//$db = Common\Factory::createDatebase();// 第一次写入注册树
//$db = \Common\Register::get('db1');

//$db = new \Common\Database\PDO(); //适配器模式
//$db->connect('127.0.0.1', 'root', 'root', 'spider');
//$db->query('show databases');
//$db->close();
$array = new Common\Algorithm\Common;
$array = $array::createArray(15, 1, 10);
$Sort = new \Common\Algorithm\quickSort();
$result = $Sort->run($array);
var_dump($result);exit;