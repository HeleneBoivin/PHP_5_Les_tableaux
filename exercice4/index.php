<!DOCTYPE HTML>
<html>
<head>
<title>Exercice4</title>
<h3>PHP - Partie 5 - Exercice 4</h3>
</head>
<body>
<p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.<p>
<?php
$months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
$months[7] = 'août';
print_r($months);
?>
</body>
</html>
