<?php
require_once 'Film.php';
class Acteur
{
    //définir les attributs
    private string $nom;
    private string $prenom;
    #private Film $films;

    //Méthodes
    //Constructeur pour créer des instances d'une classe
    //instanciation
    public function __construct(string $nom, string $prenom)
    {
        $this ->nom = $nom;
        $this ->prenom = $prenom;
        #$this ->Film();
    }

    //Accesseur
    public function getNom():string
    {
        return $this->nom;
    }
    public function getPrenom():string
    {
        return $this->prenom;
    }
}