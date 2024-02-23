<?php
$chaine = "Le lapin bondit.";
# on veut extraire le mot "lapin", donc à la position 3 pour 5 caractères
$position = 3 ;
$longueur = 5 ;
echo substr($chaine,$position,$longueur);  #affiche “lapin”