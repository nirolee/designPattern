<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common;

/**
 * Description of FamaleUserStrategy
 *
 * @author niro
 */
class FamaleUserStrategy implements UserStrategy{
    function showAd() {
        echo "2018女装";
    }
    function showCategory() {
        echo "女装";
    }
}
