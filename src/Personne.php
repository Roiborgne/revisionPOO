<?php
namespace App;

use App\Entite\Equipe;

class Personne {
    private string $nom;

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
public function liker(Equipe $equipe):Void{
        $equipe ->incrementerNbLikes();
}
}
