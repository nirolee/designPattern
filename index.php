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

//$array = new Common\Algorithm\Common;  //策略模式
//$array = $array::createArray(15, 1, 10);
//$Sort = new \Common\Algorithm\quickSort();
//$result = $Sort->run($array);
//var_dump($result);exit;
//class Page{
//    protected $strategy;
//    function index(){
//        echo 'AD:';
//        $this->strategy->showAd();
//        echo "<br/>";
//        echo 'Category:';
//        $this->strategy->showCategory();
//    }
//    function setStrategy(\Common\UserStrategy $strategy){
//        $this->strategy = $strategy;
//    }
//}
//
//$page = new Page();
//if(isset($_GET['female'])){
//    $strategy = new \Common\FamaleUserStrategy();
//}else{
//    $strategy = new \Common\MaleUserStrategy();
//}
//$page->setStrategy($strategy);
//$page->index();

//class Event extends \Common\EventGenerator
//{
//    function trigger(){
//        echo "事件发生了</br>";
//        $this->notify();
//    }
//}
//class Observer1 implements Common\Observer
//{
//    function update($event_info = null) {
//        echo "逻辑1";
//    }
//}
//
//$event = new Event;
//$event->addObserver(new Observer1);
//$event->trigger();  

 $prototype = new Common\Canvas();
 $prototype->init();
 $prototype->rect(1,2,3,4);
 $prototype->draw();
 echo "===============================<br/>\n";
 
 $canvas2 = clone $prototype;
 $canvas2->rect(1,3,2,6);
 $canvas2->draw();
