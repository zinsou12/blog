<?php

foreach(scandir(__DIR__.'/../functions') as $fichier)
{
    
    if(preg_match("#(.php)$#", $fichier))
    {
        require __DIR__.'/../functions/'.$fichier;
    }
   
}

