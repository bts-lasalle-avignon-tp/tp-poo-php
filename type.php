<?php
// En PHP : cf. http://php.net/manual/fr/language.types.type-juggling.php
$a = 1; // un entier
$b = 2.5; // un nombre à virgule flottante
$c = "hello"; // une chaîne de caractères

// afficher le type d'une variable :
var_dump($a); // int(1)
var_dump($b); // float(2.5)
var_dump($c); // string(5) "hello"

// transtypage :
$a = (int)$b; // a vaut 2
?>
