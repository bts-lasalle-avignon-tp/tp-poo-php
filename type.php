#!/usr/bin/php
<?php
// En PHP : cf. http://php.net/manual/fr/language.types.type-juggling.php
$a = 1; // un entier
$b = 2.5; // un nombre à virgule flottante
$c = "hello"; // une chaîne de caractères
$d = false; // un booléen
$fruits = array('pomme', 'banane', 'fraise'); // un tableau

// afficher le type d'une variable :
var_dump($a); // int(1) cf. is_int() 
var_dump($b); // float(2.5) cf. is_float() 
var_dump($c); // string(5) "hello" cf. is_string()
var_dump($d); // bool(false) cf. is_bool()
var_dump($fruits); // array(3) ... cf. is_array()

// transtypage :
$a = (int)$b; // a vaut 2

// tester le type d'une variable :
echo is_int($a).PHP_EOL;
echo is_numeric($a).PHP_EOL;
// etc ...
?>
