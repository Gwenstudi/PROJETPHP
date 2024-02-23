<?php
$mot = readline("Entrez une phrase : ");//demande a l'utilisateur de rentrer une phrase
$clé = readline("saisir la clé : ");
$split = str_split($mot);//spécificité php pour decoupe la chaine en tableau
$chaine_encode = "";
foreach ($split as $c) {//pour chaque element du tableau
   // echo $char."\n";//affiche chaque element du tableau
    $chaine_encode = $chaine_encode.chr(ord($c)+$clé);
echo $chaine_encode,"\n";
 }
