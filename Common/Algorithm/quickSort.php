<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common\Algorithm;

/**
 * Description of quickSort
 *
 * @author niro
 */
class quickSort {
    function run($array){
        $len = count($array);
        if($len<=1){
            return $array;
        }
        $middle = $array[0];
        $rightArray = $leftArray = array();
        for ($i = 1; $i < $len; $i++) {
            if($array[$i]<$middle){
                $leftArray[] = $array[$i]; 
            }else{
                $rightArray[] = $array[$i]; 
            }
        }
        $leftArray = $this->run($leftArray);
        $rightArray = $this->run($rightArray);
        return array_merge($leftArray, [$middle], $rightArray);
    }
}
