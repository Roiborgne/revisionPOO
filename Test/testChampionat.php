<?php
require_once "./vendor/autoload.php";

use App\Entite\Equipe;

//évite le "app/"

$psg = new Equipe("PSG");
$om = new Equipe("OM");
$ligue1 = new App\Championnat("ligue1");
$dupond = new App\Personne("Dupond");
$durand = new App\Personne("Durand");
$ligue1 -> ajouterEquipe($psg);
$ligue1 -> ajouterEquipe($om);

echo "il y a ". $ligue1->getNombreEquipe(). " equipes en ligue 1";
echo PHP_EOL;
$dupond->liker($psg);
$durand->liker($om);

echo PHP_EOL;
dump($ligue1);