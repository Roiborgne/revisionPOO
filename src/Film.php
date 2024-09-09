<?php
require_once "Acteur.php";
class Film
{
    //définir les attributs
    private string $titre;
    private string $realisateur;
    private DateTime $dateSortie;
    //association avec acteur
    private array $acteurs = [];

    //Méthodes
    //Constructeur pour créer des instances d'une classe
    //instanciation

    public function __construct(string $titre, string $realisateur, DateTime $dateSortie) //Prototype
    //implémentation
    {
        $this ->titre = $titre;
        $this ->realisateur = $realisateur;
        $this ->dateSortie = $dateSortie;
    }
    //Accesseur
    public function getTitre():string
    {
        return $this->titre;
    }
    public function getrealisateur():string
    {
        return $this->realisateur;
    }
    public function getdateSortie(): DateTime
    {
        return $this->dateSortie;
    }
    public function getAnciennete($dateSortie): int{
        $dateJour = new DateTime();
        $intervalle = $dateJour ->diff($this->$dateSortie);
        return $intervalle->y;
    }
    public function ajouterActeur (Acteur $acteur):void{
        $this ->acteurs[] = $acteur;
    }

    /**
     * @return Acteur[]
     */
    public function getActeur(): array
    {
        return $this->acteurs;
    }
}