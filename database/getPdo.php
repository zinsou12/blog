<?php

function getPdo()
{
    // define("DBNAME","posts");
    // define("HOST","localhost");
    // define("USERNAME","root");
    // define("PASSWORD","");


    return  $db = new PDO("mysql:dbname=posts;host=localhost",
    "root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}
