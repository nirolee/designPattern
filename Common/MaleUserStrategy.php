<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common;

/**
 * Description of MaleUserstrategy
 *
 * @author niro
 */
class MaleUserStrategy implements UserStrategy{
    function showAd() {
        echo 'macbook';
    }
    function showCategory() {
        echo '计算机工具';
    }
}
