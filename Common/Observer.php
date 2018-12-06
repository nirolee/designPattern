<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Common;

/**
 * Description of Observer
 *
 * @author niro
 */
interface Observer {
    
    function update($event_info = null);
    
}
