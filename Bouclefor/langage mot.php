<?php
$chaine = "choux " ;//definir une chaine de caracteres
$chaine[4]='n';//remplacer le caractere a l'indice 4 par 'n'
$chaine[3]='e';//remplacer le caractere a l'indice 3 par 'e'
$chaine[2]='i';//remplacer le caractere a l'indice 2 par 'i'
$chaine[1]='h';//remplacer le caractere a l'indice 1 par 'h'
$chaine[0]='c';"\n";//remplacer le caractere a l'indice 0 par 'c'
echo $chaine,"\n";//affiche chaine = chien
echo $chaine[0],"\n";//affiche c (1ere char de la chaine)
var_dump (chr(99));"\n";//affiche le caractere correspondant a 99 dans la table ascii
var_dump (chr(99),chr(104),chr(111),chr(117),chr(120)); //affiche les caracteres correspondant a 99,104,111,117,120 dans la table ascii
echo chr(99).chr(104).chr(111).chr(117).chr(120);//
echo "\"bon"."jour\"   ";//affiche "bonjour" avec guillemets
var_dump ("bon"."jour");//concatenation donne la chaine"bonjour"
var_dump (intval("9890"));//change chaine de char en entier 9890
var_dump (strval(9890));//change entier en chaine de caracteres (string..."9890")
echo ord('c'),ord('h'),ord('*'),ord('µ'),ord('x'),"\n";// affiche 991111215120
echo chr(99).chr(104).chr(111).chr(117).chr(120),"\n";//affiche choux
 echo strtoupper("bonjour"),"\n";//affiche BONJOUR Majuscule 
echo strtolower("CAMENBERT"),"\n";//affiche camenbert Minuscule
 echo ucfirst("bonjour"),"\n";//affiche Bonjour 1ere lettre en majuscule
echo lcfirst("Contour"),"\n";//affiche contour 1ere lettre en minuscule
$decoupe = explode(" ","bonjour tout le monde chante");"\n";//decoupe la chaine en tableau
echo $decoupe[0],"\n";//affiche bonjour
echo $decoupe[4],"\n";//affiche chante
