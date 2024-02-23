<?php
$ph = readline("Entrez une phrase : ");
$tableau = str_split($ph);
$i = 0;
foreach ($tableau as $c) {
   if ($c == "a" || $c == "e" || $c == "i" || $c == "o" || $c == "u" || $c == "y") 
    $ph[$i] = strtoupper($c);
    $i++;
}
echo $ph;
