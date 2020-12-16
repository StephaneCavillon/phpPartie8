<?php
    session_start();
    $_SESSION = array('lastname'=>'CAVILLON', 'firstname'=>'Stéphane', 'age' => 31);
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
    
    <a href="page2.php">Page2</a>

    <p>Bonjour, <?= $_SESSION['firstname'] ?>, comment vas tu depuis tes <?= $_SESSION['age'] ?> ans ? </p>


</body>
</html>