<?php

function view($view, $data=[])
{
    
    if($data !==[])
    {
        extract($data);
    }

    require '../view/'.$view.'.php';
}