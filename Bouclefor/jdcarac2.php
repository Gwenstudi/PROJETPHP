<?php
$g = readline ("Entrez une phrase : ");  
$tableau = str_split ($g); //particularite php pour découper une chaine de caractère
$indice = 0; //variable pour suivre les itérations
foreach ($tableau as $c) {// pour séparer la phrase en caractères
    $g[$indice] = strtoupper ($c);
    $indice++;
}
    echo $g;
 