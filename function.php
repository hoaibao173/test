<?php
function loadClass($className){
    if(is_file ("class/$className.php"))
    include "class/$className.php";
    else{
        echo"NO $className";
        exit;
    }

}