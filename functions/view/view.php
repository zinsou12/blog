<?php

function view($view, array $data=[])
{
    /**
     * cette fonction permet d'appeler une vue.
     *elle reçoit en parametre deux variables, 
     *la premiere la vue et la seconde les valeurs à passer.
     */

    if(!empty($data))
    {
        extract($data);
    }
    
    require "./../view/{$view}.php";
}