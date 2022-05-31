<?php


function home()
{
  return  view('home.view');
}
function posts()
{
    echo "Je suis la page qui affiche les posts";
}
function post($param)
{
    echo "Je suis la page qui affiche le post {$param}";
}

function contact()
{
    return  view('contact.view', ['bonjour'=>'bonjour les amis']);
}

function error404()
{
    return  require "../view/error404/error404.view.php";
}