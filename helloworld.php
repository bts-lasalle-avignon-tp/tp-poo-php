#!/usr/bin/php
<?php

// un commentaire : mon premier programme PHP !

// saisie d'une chaîne de caractères
$langue = readline("Quelle est votre langue (fr, ...) ? ");

// une instruction conditionnelle
if ($langue == "fr") // test de la valeur
//if ($langue === "fr") // test de la valeur et du type
{
    $message = "Bonjour le monde";
}
else
{
    $message = "Hello world";
}

// saisie d'un entier
$nb = readline("Donnez un nombre : ");

$i = 0;
// une boucle
while ($i < $nb)
{
    echo $message."".PHP_EOL;
    echo $message . " " . ($i + 1) . " fois".PHP_EOL;
    $i += 1;
}

?>
