#!/usr/bin/php
# Mode CLI
# Le code PHP doit être inséré entre les balises '<?php' et '?>' ou '<?' et '?>'

<?php

// la première ligne (ci-dessus) commence par #! (le shebang) qui permet d'indiquer
// le chemin vers l'interpréteur avec lequel le script doit être exécuté en CLI
// inutile dans le cas d'une utilisation web

// Les variables sont préfixées du symbole $
// Typage : dynamique, faible
// Syntaxe : proche C/C++

class Motocyclette
{
    private $cylindree;
    private $vitesseMaximale;
    private $couleur;

    public function __construct($couleur="", $cylindree="125", $vitesseMaximale="130")
    {
        $this->cylindree = $cylindree;
        $this->vitesseMaximale = $vitesseMaximale;
        $this->couleur = $couleur;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function affiche()
    {
        echo "cylindree = $this->cylindree cm3".PHP_EOL;
        echo "vitesse maximale = $this->vitesseMaximale km/h".PHP_EOL;
        if(!empty($this->couleur))
            echo "couleur = $this->couleur".PHP_EOL;
    }
}

echo 'Version PHP courante : '.phpversion().''.PHP_EOL;
// PHP_EOL insère le saut de ligne adapté à la situation :
// - en mode CLI : ce sera un '\n'
// - en mode web : ce sera une balise <br>

$MonTacot1 = new Motocyclette();
$MonTacot2 = new Motocyclette("rouge", "500 cm3"); // typage faible !

echo "MonTacot1".PHP_EOL;
$MonTacot1->affiche();

$MonTacot1->setCouleur("bleue");
echo "La couleur de MonTacot1 est ".$MonTacot1->getCouleur()."".PHP_EOL;

echo "MonTacot2".PHP_EOL;
$MonTacot2->affiche();
echo "La couleur de MonTacot2 est ".$MonTacot2->getCouleur()."".PHP_EOL;

?>
