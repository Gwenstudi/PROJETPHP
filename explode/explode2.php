<?php
$courses = "salade-carottes-tomates-pommes de terre-persil";//initiation de la variable courses
$separateur = "-"; # le caractère tiret
$tableau = explode($separateur,$courses);
foreach($tableau as $element)

    echo $element,"\n";
