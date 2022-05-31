<?php


function run($method)
{
    if($method == 'GET'){
       return get($_GET['url']);
    }elseif($method == 'POST'){
      return  post($_POST);
    }
}

function get($url)
{

   $tab = explode("/",$url) ;
   $param = isset($tab[1]) ? $tab[1] : null ;
    execute($url,$param);
}

function matches($url,$param = null)
{
    $response = "";

    $home = "";
    $posts = "posts";
    $post = "posts/{$param}";
    $contact = "contact";

    $response .= ($home == $url) ? true : false;
    $response .= ($posts == $url) ? true : false;
    $response .= ($post == $url) ? true : false;
    $response .= ($contact == $url) ? true : false;

    return $response ;
    

}

function execute($url,$param = null)
{
    if(matches($url,$param)){
        $returnValue = match($url){
            ""=>"home",
            "posts"=>"posts",
            "posts/{$param}"=>"post/{$param}",
            "contact"=>"contact"
        };
        $values = explode('/',$returnValue);
        $function = $values[0];
        $controller = isset($values[1]) ? $function($values[1]) : $function() ;
        
       }else{
            error404();
       }
}

