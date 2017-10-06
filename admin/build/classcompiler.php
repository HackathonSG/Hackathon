<?php

$basedir = $_SERVER['DOCUMENT_ROOT'] . '/Hackathon/';
$classpath = array(
    /*Plaats hier alle paths naar class files toe, bgin met $basedir en voeg vanuit daar je pad toe*/
);

foreach($classpath as $class) {
    if(file_exists($class)) {
        include_once $class;
    }
}