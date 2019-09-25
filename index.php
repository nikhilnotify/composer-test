<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

include_once 'vendor/autoload.php';

use Test\Test;

class CheckTest {
    public function index (){
        echo __CLASS__ . "<br>";
        (new Test)->output();
    }
}

// Testing
(new CheckTest)->index();
