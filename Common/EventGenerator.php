<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common;

/**
 * Description of EventGenerator
 *
 * @author niro  
 */
abstract class EventGenerator {
    
    private $observers = array();
    
    function addObserver(Observer$observer){
        $this->observers[]  = $observer;   
    }
    
    function notify(){
        foreach($this->observers as $observer){
           $observer->update(); 
        }
    }
    
}
