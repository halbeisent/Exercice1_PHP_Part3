<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Exercice 1 Partie 3 PHP</title>
  </head>
  <body>
  <?php
  // On initlalise la variable count à 0
  $count = 0;
  while ($count <= 10) {//Tant que la valeur de la variable $count est inférieure à 10
    echo $count . '<br />';//On affiche son contenu en sautant une ligne
    $count++; //Puis on l'incrémente
  }
  ?>
  </body>
</html>
