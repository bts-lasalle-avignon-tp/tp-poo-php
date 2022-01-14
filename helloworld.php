#!/usr/bin/php
# Mode CLI
# Le code PHP doit être inséré entre les balises '<?php' et '?>' ou '<?' et '?>'

<?php

// un commentaire : mon premier programme PHP !

echo 'Version PHP courante : '.phpversion().''.PHP_EOL;
// PHP_EOL insère le saut de ligne adapté à la situation :
// - en mode CLI : ce sera un '\n'
// - en mode web : ce sera une balise <br>
echo 'Système : '.php_uname().PHP_EOL.PHP_EOL;// Voir aussi :
//phpinfo();

// Le programme

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
    //echo $message."".PHP_EOL;
    echo $message . " " . ($i + 1) . " fois".PHP_EOL;
    $i += 1;
}

?>
