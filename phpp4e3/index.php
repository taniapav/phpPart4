<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part4 exo3</title>
  </head>
  <body>
    <?php
    function para($text1, $text2){
      return $text1. ' ' .$text2;
    }
    $conc = para('Bonjour' , 'Toto');
    echo $conc;
     ?>

  </body>
</html>
