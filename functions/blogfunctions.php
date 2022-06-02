<?php
require "../database/model.php";
function home()
{
  view("home.view");
}
function posts()
{
    $datas = getAll();
    var_dump($datas); die();
    view("posts.view");
}
function post($id=null)
{
    
    $datas = getId("posts",$id);

    //var_dump($datas);die();
    //foreach($datas as $data );
    view("post.view",$datas);//petit exemple
}

function contact()
{
    view("contact.view");
}

function error404()
{
    view("error404/error404.view");
}