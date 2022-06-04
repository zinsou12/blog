<?php

    $tableau = explode('/', $_GET['url']);

    $function = $tableau[0]!="" ? $tableau[0] : 'home';

    if(function_exists($function)){

        unset($tableau[0]);
        
        if(isset($tableau)){
           

            return call_user_func_array($function, $tableau);
        }
            
    }
    else{
        error404();
    }
