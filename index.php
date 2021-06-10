<!DOCTYPE html>
<html>
<body>

  <h1>Exercice 1</h1>
  <p>Créez une boucle qui affiche les nombres de 0 à 10.</p>
  <?php
    $number = 0;
    while($number <= 10){
      echo $number. '<br>';
    $number++;
    }
  ?>
  <?php
    //for ($i=0; $i<11; $i++) {
    //echo $i;
  //}
  ?>

  <h1>Exercice 2</h1>
  <p>Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100.
     Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième et
     afficher le résultat.</p>
  <?php
      $randomNumber = rand(1, 100);
    //$globalresult = ($variable1 * $variable2);
      for($number = 0; $number <=20; $number++) {
        echo 'Ma première variable vaut '. $number.'<br>';
        echo 'Ma seconde variable vaut '. $randomNumber.'<br>';
        echo 'La multiplication des deux vaut '. $randomNumber * $number.'<br>';
      }
  ?>

  <h1>Exercice 3</h1>
  <p>Créez une variable initialisé à 1. Tant que cette variable n'a pas atteint 15, affichez
    'On y est presque'.</p>
  <?php
      //for($variable = 1; $variable <= 15; $variable++) {
      //echo 'On y est presque'.'<br>';
      //}
  ?>
  <?php
      for($variable = 1; $variable <= 15; $variable++) {
      if ($variable !=15){
  ?>
      <p><?='On y est presque.'?></p>
  <?php
      }else{
  ?>
      <p><?='On a atteint.'?></p>
  <?php
      }
    }
  ?>

  <h1>Exercice 4</h1>
  <p>Initialisez une variable à 1. Tant que cette variable est inférieure à 100,
      incrémentez avec un pas de 15.</p>
  <?php
      $result = $variable;
      for ($variable = 1; $variable <= 100; $variable += 15){
  ?>
      <p> <?= $variable ?> </p>
  <?php
      }
  ?>

  <h1>Exercice 5</h1>
  <p>Initialisez une variable à 200. Tant que cette variable est supérieure à 0,
      décrémentez avec un pas de 12.</p>
  <?php
      //$result = $variable;
      //for ($variable = 200; $variable >= 0; $variable -= 12){
  ?>
      <p> <?= $variable ?> </p>
  <?php
      //}
  ?>

  <?php
      $number = 200;
      while ($number >= 0){
  ?>
      <p> <?= $number ?></p>
  <?php
      $number -=12;
         }
  ?>

  <h1>Bonus</h1>
  <p>Créez un tableau contenant les 12 mois de l'année. Afficher ces mois dans un "select".</p>
  <?php
    $arrayMois = array(
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9=> 'Septembre',
   10=> 'Octobre',
   11 => 'Novembre',
   12 => 'Décembre'
  );
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected = '';
  // Parcours du tableau
    echo '<select name="mois">',"\n";
  foreach($arrayMois as $valeur => $nomMois)
  {
    // Le mois est-il le mois courant ?
    //if($nomMois == mois('M'))
    {
  $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $valeur ,'"', $selected ,'>', $nomMois ,'</option>',"\n";
    // Remise à zéro de $selected
  $selected='';
  }
    echo '</select>',"\n";
  ?>
    <!-- <select>
  <?php
    //$tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
    //$tablength = count($tab);
    //for($i = 0; $i <= $tablength-1; $i++){
  ?>
    <option>Choisir un mois</option>
    <option><!<? //= //$tab[$i] ?></option>
  <?php
    //}
  ?>
  </select> -->

  <?php
      $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
  ?>
      <select>
  <?php
      foreach ($tab as $value) {
  ?>
      <option><?= $value ?></option>
  <?php
      }
  ?>
      </select>

  </body>
</html>
