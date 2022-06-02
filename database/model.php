<?php
require "getPdo.php";

//Exemple
function getOnORAll(string $table,$id=null)
{
    if($id===null)
    {
        $getPosts = getPdo()->query("SELECT * FROM $table");

        $data = $getPosts->fetchAll();

        return $data;
    }
    else
    {
        $getPost = getPdo()->prepare("SELECT * FROM $table WHERE id=:id");

        $getPost->execute(['id'=>$id]);

        $data = $getPost->fetch();

        return $data;
    }
}

function findAll(string $table, array $tableau)
{
   $keys = [];
   
   $values = [];

    foreach($tableau as $key=>$value)
    {
        $keys [$key]= $key.'=:'.$key;
    }

    $keys = implode(', ', $keys);
    
    //return var_dump($keys);

    $getPost = getPdo()->prepare("SELECT * FROM $table WHERE $keys");

        $getPost->execute($tableau);

        $data = $getPost->fetchAll();

        return $data;
}