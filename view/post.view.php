<?php ob_start() ?>
    
<?php 
  echo $titre;
  echo $content;
  echo $id;
    ?>
   

<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>