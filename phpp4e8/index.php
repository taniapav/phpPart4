<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part4 exo8</title>
  </head>
  <body>
    <p>Faire une fonction qui prend en paramètre trois nombres 
       et qui renvoit la somme de ces nombres.
       Tous les paramètres doivent avoir une valeur par défaut.
    </p>
    <?php
    function somme($x, $y, $z){
      $resultat = $x + $y + $z;
      return $resultat;
    }
    ?>
    <p><?= somme(2, 5, 6) ?></p>
  </body>
</html>
