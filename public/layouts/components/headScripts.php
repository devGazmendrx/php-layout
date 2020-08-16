<?php 
    if(!empty($params['customScripts']['head'])){

        foreach($params['customScripts']['head'] as $headScript){

            $scriptName = $headScript['name'];

            switch($headScript['type']){
                case "css":
                    $link = "public/css/$scriptName.css";
                    echo "<link rel='stylesheet' href='$link' />";
                break;

                case "js":
                    $link = "public/js/$scriptName.js";
                    echo "<script src='$link'></script>";
                break;

            }
        }
    }
?>