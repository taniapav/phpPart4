<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part4 exo4</title>
  </head>
  <body>
    <p>
    <?php
    function numb($numb1, $numb2){
      if($numb1 > $numb2){
        $test = 'Le premier nombre est plus grand';
      }elseif ($numb1 < $numb2){
        $test = 'Le premier nombre est plus petit';
      }else{
        $test = 'Les deux nombres sont identiques';
      }
      return $test;
    }
    echo numb(5, 4);
     ?>
  </body>
</html>
