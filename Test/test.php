<?php
require_once './src/Film.php';
//instancier la class film

$film1 = new Film("titre de test","rea de test", DateTime::createFromFormat("d/m/Y","12/03/2023"));
echo $film1 -> getdateSortie();
echo $film1 ->getTitre();
#echo $film1 ->getAnciennete($dateSortie);

$film1 ->ajouterActeur(new Acteur("jean","Dupont"));
$film1 ->ajouterActeur(new Acteur("Pierre","Martin"));
print_r($film1->getActeur());
//afficher les noms des acteurs
foreach ($film1->getActeur() as $acteur){
    echo $acteur->getNom();
    echo $acteur->getPrenom();
}
