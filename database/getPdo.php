<?php

function getPdo()
{

    return  $db = new PDO("mysql:dbname=posts;host=localhost",
    "root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}