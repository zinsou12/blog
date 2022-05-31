<?php
/* chargement des fichiers necessaires
 affichage de la vue correspondante
*/

require "../functions/router.php";

require "../functions/view.php";

 //var_dump($_GET);die;
echo run($_SERVER['REQUEST_METHOD']);