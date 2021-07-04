<?php

class Router{
    function routing($param){
        if($param=='/about'){
            include_once 'views/about.php';
        }elseif($param=='/'){
            include_once 'views/index.php';
        }else{
            include_once 'views/error.php';
        }
    }
}