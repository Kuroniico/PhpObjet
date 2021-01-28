<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "ClassExo5Objet.php";
            $personnage1=new personnage(1);
            $personnage2=new personnage(2);

            $personnage1->afficher();
        echo "<p>";
            $personnage2->afficher();
        echo "</p>";
    ?>
</body>
</html>