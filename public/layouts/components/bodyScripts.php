<?php 
    if(!empty($params['customScripts']['body'])){

        foreach($params['customScripts']['body'] as $bodyScript){

            $scriptName = $bodyScript['name'];

            switch($bodyScript['type']){
                
                case "js":
                    $link = "public/js/$scriptName.js";
                    echo "<script src='$link'></script>";
                break;

            }
        }
    }
?>