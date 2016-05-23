<!doctype html>
<html>

  <head>
  <meta charset="UTF-8">
  <title>Reçu</title>
  </head>

<body>

<h1>Page reçu de fichier</h1>
<?php
//On vérifie que le fichier existe
if(isset($_FILES['fichier']) AND $_FILES['fichier']['error']==0)
{
  //On vérifie que le fichier ne dépasse pas 10MO
  if($_FILES['fichier']['size']<=10000000)
  {
    //On relève l'extension du fichier qui a été upload
    $infosfichier=pathinfo($_FILES['fichier']['name']);
    $extensions=$infosfichier['extension'];
    $extension_autorisees= array('jpeg','jpg','png');
    if(in_array($extensions,$extension_autorisees)) //Problème dans ce if sûrement dû au move_uploaded_file
    {
      move_uploaded_file($_FILES['fichier']['tmp_name'], 'reception/' . basename($_FILES['fichier']['name']));
      echo "l'envoie de données à réussi, votre fichier à bien été upload";
    }
    else if (move_uploaded_file==false)
    {
      echo "L'envoie de données à échoué et move_uploaded_file=false";
    }
    else
    {
      echo "L'envoie de données à échoué";
    }

  }
}
?>

</body>

</html>
