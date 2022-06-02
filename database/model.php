<?php
require "getPdo.php";

//Exemple
function getId($table=null,$id=null)
{
    $req = getPdo()->prepare("SELECT * FROM $table WHERE id=?");
    $req->execute([$id]);
    return $req->fetch();
}

function getAll()
{
    
    
    
    $req = getPdo()->query("SELECT * FROM posts");

    $data= $req->fetchAll();

    return $data;
    
     
}
