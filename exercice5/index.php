<!DOCTYPE HTML>
<html>
<head>
<title>Exercice5</title>
<h3>PHP - Partie 5 - Exercice 5</h3>
</head>
<body>
<p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.<p>
<?php
$department = array (
  '59' => 'Nord',
  '62' => 'Pas de Calais',
  '80' => 'Somme',
  '60' => 'Oise',
  '02' => 'Aisne');
print_r($department);
?>
</body>
</html>
