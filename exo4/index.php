<?php
    setcookie('user_login', $_POST['user_login'], time() + 24*3600);
    setcookie('user_password', $_POST['user_password'], time() + 24*3600);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercice 4</h2>
    <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</p>
    
    <p>Bonjour <?= $_COOKIE['user_login']; ?>, je connais ton mot de passe haha c'est <strong><?= $_COOKIE['user_password'];?></strong> </p>

</body>
</html>