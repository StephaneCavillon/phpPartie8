<?php
    if(!empty($_POST)){
        setcookie('user_login', $_POST['user_login'], time() + 24*3600);
        setcookie('user_password', $_POST['user_password'], time() + 24*3600);
    } else {}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Exercice 3</h2>
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>

    <!-- pour l'exo 3 décommenter ici -->
    <!-- <form action="index.php" method="POST">      -->
    <!-- pour l'exo 4 décommenter ici -->
    <form action="../exo4/index.php" method="POST">     
        <div>
            <label for="login"> Votre login :</label>
            <input type="text" name="user_login" id="login">
        </div>
        <div>
            <label for="password">Votre mot de passe:</label>
            <input type="password" name="user_password" id="password">
        </div>
        <button type="submit">inscrivez-vous</button>
    </form>
    

</body>
</html>