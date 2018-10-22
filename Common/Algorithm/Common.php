<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common\Algorithm;

/**
 * Description of Common
 *
 * @author niro
 */
class Common {
    /* 
     * @param $num 数量
     * @param $min 最小值
     * @param $max 最大值
     * return 一个数组
     */
    static function createArray($num, $min, $max){
        for ($index = 0; $index < $num; $index++) {
            $array[] = rand($min, $max);
        }
        return $array;
    }
}
