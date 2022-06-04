<?php
function admin()
{
    /*
        affichage des posts.
    */
    $datas['data'] = getOneOrAll("posts");

    view('admin.view',$datas);
}

/*
affichage du formulaire pour la création d'un post
*/
function createPost()
{  
       return view("createPost.view");       
   
}

/*
 affichage du formulaire pour la mise à jour d'un post
*/
function updatePost(int $id)
{       
    $data = getOneOrAll("posts", $id);
    
    return view("update.view", $data);   
}


function deletePost($id)
{
    delete("posts",$id);
}

/**
 * function pour le traitement du formulaire de création de post
 */

function traitCreate()
{
    if(isset($_POST) && !empty($_POST))
    {
        $data = [
            'titre'=>htmlspecialchars(trim($_POST['titre'])),
            'content'=>htmlspecialchars(trim($_POST['content'])),
            'date_created'=>date('Y-m-d H:i:s'),
        ];

        create('posts', $data);

        header('Location:'.baseUrl.'createPost');
    }
}

function traitUpdate($id)
{

    if(isset($_POST) && !empty($_POST))
    {
        $data = [
            'titre'=>htmlspecialchars(trim($_POST['titre'])),
            'content'=>htmlspecialchars(trim($_POST['content'])),            
        ];

        update('posts', $data, $id);
        
        header('Location:'.baseUrl.'updatePost/'.$id);
    }

    
}

