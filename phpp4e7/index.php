<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part4 exo7</title>
  </head>
  <body>
    <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne.
      Le genre peut être :
      Homme
      Femme
      La fonction doit renvoyer en fonction des paramètres :
      Vous êtes un homme et vous êtes majeur
      Vous êtes un homme et vous êtes mineur
      Vous êtes une femme et vous êtes majeur
      Vous êtes une femme et vous êtes mineur
      Gérer tous les cas.
    </p>
    <?php
    function gender($age, $gender) {
      if ($age >= 18 && $gender == 'homme'){
        $message = 'Vous êtes un homme et vous êtes majeur';
      } elseif ($age < 18 && $gender == 'homme') {
        $message = 'Vous êtes un homme et vous êtes mineur';
      } elseif ($age >= 18 && $gender != 'homme') {
        $message = 'Vous êtes une femme et vous êtes majeur';
      } elseif ($age <= 18 && $gender != 'homme'){
        $message = 'Vous êtes une femme et vous êtes mineur';
      }else {
        $message = 'N\'écrivez pas le cheval';
      }
      return $message;
    } ?>
    <p><?= gender(25, 'femme') ?></p>
  </body>
</html>

