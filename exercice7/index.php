<!DOCTYPE HTML>
<html>
<head>
<title>Exercice7</title>
<h3>PHP - Partie 5 - Exercice 7</h3>
</head>
<body>
<p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.<p>
<?php
$department = array (
  '59' => 'Nord',
  '62' => 'Pas de Calais',
  '80' => 'Somme',
  '60' => 'Oise',
  '02' => 'Aisne');
  $department['51'] = 'Marne';
print_r($department);
?>
</body>
</html>
