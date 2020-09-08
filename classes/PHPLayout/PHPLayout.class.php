<?php 

namespace App\PHPLayout;

class PHPLayout{

    public function __construct(){}

    public static function loadPage($layout, $page, $params = []){
        include_once("layouts/$layout.php");
    }
}