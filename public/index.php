<?php
/* chargement des fichiers necessaires

scan du 

*/

foreach(scandir('../functions') as $fichier)
{
    if(preg_match("#/.php$#", $fichier))
    {
        require __DIR__.'/../functions/'.$fichier;
    }
    
}


//var_dump(require_once __DIR__.'/../functions');





 //var_dump($_GET);die;
 /*
 affichage de la vue correspondante
 */
echo run($_SERVER['REQUEST_METHOD']);
