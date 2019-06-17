<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part4 exo6</title>
  </head>
  <body>
    <?php
    function bonjour($lastname, $age, $firstname){
    $conc = 'Bonjour ' .$lastname. ' ' .$firstname. ' , tu as ' .$age. ' ans.';
    return $conc;
    }
    echo bonjour('Pavlovic', 45, 'Tania');
  ?>
  </body>
</html>
