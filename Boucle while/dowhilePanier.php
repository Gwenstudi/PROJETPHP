
<?php
// faire saisir le nombre d'articles avec phrase
 //phase d'initialisation
$n = readline ("Combien d'articles avez vous? ") ;  //phase d'initialisation
do {
$n--; //phase d'actualisation
echo "Il reste $n articles à saisir\n"; //traitement
} while ($n > 0); //phase conditionnelle
echo "Fin de saisie\n"; //traitement
