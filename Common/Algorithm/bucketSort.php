<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common\Algorithm;


/**
 * Description of bucketSort
 * 2,9
 * @author niro
 */
class bucketSort {
    function run($array){
        
        $min = min($array);
        $max = max($array);
        $num = $max-$min+1;
        $list = array_fill($min, $num, 0); //创建空桶；
        foreach ($array as $key => $val) {
            $list[$val]++;
        }//入桶
        foreach ($list as $k => $v) {
            for($i=1;$i<=$v;$i++){
                $result[] = $k;
            }
        }
    }
}
