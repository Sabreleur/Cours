<!DOCTYPE html>
<html>
<head>
  <title>Page de test bric-à-brac</title>
  <meta charset='UTF-8'>
</head>

<body>
  <?php
 // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
 if (isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0)
 {
     // Testons si le fichier n'est pas trop gros
    if ($_FILES['fichier']['size'] <= 10000000)
    {
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['fichier']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extension_upload, $extensions_autorisees))
      {
       // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($_FILES['fichier']['tmp_name'], 'reception/' . basename($_FILES['fichier']['name']));
      echo "L'envoi a bien été effectué !";
      }
      else
      {
      echo "l'envoie à échouer";
      }
    }
 }
 ?>


</body>
</html>
