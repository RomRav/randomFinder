<?php

$randomInit = rand(0, 1000);
$randomFinder = 0;
$compteur = -1;

while ($randomFinder !== $randomInit) {
    $compteur++;
    $randomFinder = rand(0, 1000);
}
echo "Valeur random: " . $randomInit . "<br>";
echo "Nombre de random pour retrouver le 1er tirage: " . $compteur;
?>