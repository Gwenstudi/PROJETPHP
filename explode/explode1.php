<?php

$phrase = "La danseuse met ses ballerines."; //initiation de la variable phrase
$separateur = " "; // séprateur un caractère 'espace'
$tableau = explode($separateur, $phrase);//découpe de la phrase en tableau

foreach ($tableau as $element) { //boucle pour afficher chaque élément du tableau
    echo $element . "\n"; // affichage de chaque élément du tableau
}

