<?php
/*
    cette fonction permet d'appeler une vue.
    elle reçoit en parametre deux varriable, 
    la premiere la vue et la seconde les valeurs à passer.
    
 */
function view($view, $data=null)
{
    
    if($data !==null)
    {
        extract($data);
    }

    require '../view/'.$view.'.php';
}