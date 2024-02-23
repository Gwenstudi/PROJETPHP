<?php
$liste = "10 bananes, 2Kg de pommes, mangue, une cagette d'abricots, 1 barquette de fraises";
$separateur = ", "; # 2 caractères : virgule et espace
$tableau = explode($separateur,$liste);//découpe de la liste en tableau
foreach($tableau as $element)//boucle pour afficher chaque élément du tableau
    echo $element,"\n";//affichage de chaque élément du tableau