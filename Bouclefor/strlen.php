<?php
$mot = readline("Entrez un mot d'au moins 6 lettres: ");
if (strlen($mot)<6) {
    echo "Le mot doit contenir au moins 6 lettres";
} else {
    echo " Le mot entré est validé ";

}
