<!DOCTYPE HTML>
<html>
<head>
<title>Exercice8</title>
<h3>PHP - Partie 5 - Exercice 9</h3>
</head>
<body>
<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.<p>
<?php
$department = array(
  '59' => 'Nord',
  '62' => 'Pas de Calais',
  '80' => 'Somme',
  '60' => 'Oise',
  '02' => 'Aisne');

foreach($department as $key => $value)
{
  echo '<p>' . $value . '</p>';
}
?>
</body>
</html>
