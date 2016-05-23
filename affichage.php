<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Page d'authentification</title>
</head>

<body>

<h1>Page d'authentification</h1>
<?php
echo htmlspecialchars ($_POST['pseudo']) . '<br>';
echo  htmlspecialchars ($_POST['message']) . '<br>';
echo $_POST['pays'] . '<br>';
echo $_POST['cases'] . '<br>';
echo htmlspecialchars ($_POST['pseudoc']) . '<br>';
?>

</body>
</html>
