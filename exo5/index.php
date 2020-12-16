<?php
    if(!empty($_POST)){
        // stock la nouvelle valeur pour l'affichage au premier envoie du formulaire
        $newlogin = $_POST['user_login'];
        $newpassword = $_POST['user_password'];
        
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

    <h2>Exercice 5</h2>
    <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>

    <?php
        if(!empty($_COOKIE)){
    ?>

    <p>Tes informations de connection sont :
        <ul>
            <li> login: <?=$_COOKIE['user_login'];?> </li>
            <li>mdp: <?=$_COOKIE['user_password'];?></li>
        </ul>
    </p>
    <?php 
        } else {}
    ?>

        <form action="index.php" method="POST">     
            <div>
                <label for="login"> Votre login :</label>
                <input type="text" name="user_login" id="login" required>
            </div>
            <div>
                <label for="password">Votre mot de passe:</label>
                <input type="password" name="user_password" id="password" required>
            </div>
            <button type="submit">inscrivez-vous</button>
        </form>
    
        <?php
            if(!empty($_POST)){
        ?>

    <p>Bonjour <?= $newlogin; ?>, je connais ton mot de passe haha c'est <strong><?= $newpassword;?></strong> </p>
        <?php
            }else {}
        ?>

</body>
</html>