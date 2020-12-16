<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercice 1</h2>

    <p>Faire une page HTML permettant de donner à l'utilisateur :
        son User Agent
        son adresse ip
        le nom du serveur</p>


    <p> Bonjour, voici quelques informations sur votre connection :
        <ul>
            <li>Tout d'abord votre navigateur: <?= $_SERVER['HTTP_USER_AGENT'];?></li>
            <li>Ensuite votre adresse IP : <?= $_SERVER['SERVER_ADDR'];?></li>
            <li>Et enfin le nom de votre serveur : <?= $_SERVER['SERVER_NAME'];?></li>
        </ul>
    </p>
    
</body>
</html>