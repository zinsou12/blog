<?php
require "../database/model.php";
function home()
{
  view("home.view");
}
function posts()
{
    $datas = findAll('posts', ['id'=>'2022-06-01 17:08:25']);

    return var_dump($datas);

    //var_dump($datas); die();
    
    view("posts.view");
}
function post($id=null)
{
    
    $datas = getOnORAll("posts",$id);

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