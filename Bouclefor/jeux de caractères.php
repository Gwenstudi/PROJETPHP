<?php
$mot = readline("Entrez une phrase : ");//demande a l'utilisateur de rentrer une phrase
$split = str_split($mot);//spécificité php pour decoupe la chaine en tableau
foreach ($split as $char) {//pour chaque element du tableau
    echo $char."\n";//affiche chaque element du tableau
}