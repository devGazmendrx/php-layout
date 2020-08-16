<?php 

namespace App\PHPLayout;

class PHPLayout{

    private $appBasePath;

    public function __construct($appBasePath){

        $this->appBasePath = $appBasePath;
    }

    public function loadPage($layout, $page, $params = []){
        $params = $params;
        $pageName = $page;
        include_once("$this->appBasePath/public/layouts/$layout.php");
    }
}