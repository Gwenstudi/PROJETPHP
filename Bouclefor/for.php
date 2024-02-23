<?php // differentes manieres d'afficher les caractères d'une phrase
$g = readline ("Entrez une phrase : "); 
$cle = readline ("Entrez la clé : ");  
$tableau = str_split ($g); //particularite php pour découper une chaine de caractère
foreach ($tableau as $g) {// supprimer le douvle / pour les autres exemples
   //echo $g  ;//affiche chaque caractère sur une ligne
   //echo ord($g); //affiche le code ascii de chaque caractère meme ligne
   //echo ord($g),"\n"; //affiche le code ascii de chaque caractère a la ligne
   //echo "=>",chr(ord($g)),"\n";//affiche le caractère avec "=>" devant
   echo "=>",chr(ord($g)+1);//affiche le caractère suivant avec "=>" devant
   //echo "=>",chr(ord($g)+1),"\n";//affiche le caractère suivant avec "=>" devant
   //echo chr(ord($g)-$cle);// toutes operations possibles (+-*/% )

}//affiche le caractère suivant}
