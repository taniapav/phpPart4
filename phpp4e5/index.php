<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part4 exo5</title>
  </head>
  <body>
    <?php
    function para($number, $text){
      $string = $number. ' ' .$text;
      return $string;
    }
    echo para(25, ' ans');
     ?>
  </body>
</html>
