<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercice 2</h2>

    <p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
    Ces variables auront été définies directement dans le code. 
    Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
    
    <a href="index.php">Index</a>

    <p>Si je ne me trompe pas, tu es <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?>, ton voyage c'est bien passé depuis la page précedente ? </p>

</body>
</html>