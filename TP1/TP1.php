<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TP1 accès au code de la nasa</title>
</head>

<body>
  <input type="password" name="password"/>
  <input type="submit" value="valider"/>
<?php
$_GET=$mdp;
$password=password;
if($password=$mdp)
{
  echo"reussi";
}
else
{
  echo"échoué";
}
?>

</body>
</html>
