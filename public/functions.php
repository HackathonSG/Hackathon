<?php

/*Basic page settings*/
function get_head() {
    echo '<meta charset="utf-8">';
}

function get_assets() {
    $basedir = 'http://localhost/Hackathon/public/';
    
    $csslist = array(
        /*Plaats je css paths hier neer vanaf $basedir(hoef je niet op te schrijven)*/
        'assets/css/pagebuilding.css',
        'assets/fonts/fontmanager.css',
        'plugins/font-awesome/css/font-awesome.css',
        'plugins/font-awesome/css/font-awesome.min.css'
    );
    
    $jslist = array(
        /*Plaats je css paths hier neer vanaf $basedir(hoef je niet op te schrijven)*/
    );
    
    foreach($csslist as $csspath) {
        echo '<link rel="stylesheet" type="text/css" href="'. $basedir . $csspath .'">';
    }
    
    foreach($jslist as $jspath) {
        echo '<script type="text/javascript" defer="defer" src="'. $basedir . $jspath .'"></script>';
    }
}