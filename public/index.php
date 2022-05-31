<?php

require "../functions/router.php";

require "../functions/view.php";

 //var_dump($_GET);die;
echo run($_SERVER['REQUEST_METHOD']);