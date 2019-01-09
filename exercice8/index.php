<!DOCTYPE HTML>
<html>
<head>
<title>Exercice8</title>
<h3>PHP - Partie 5 - Exercice 8</h3>
</head>
<body>
<p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.<p>
<?php
$months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
for ($numero = 0 ; $numero < 12 ; $numero++)
{
  echo '<p>' . $months[$numero] . '</p>';
}
?>
</body>
</html>
