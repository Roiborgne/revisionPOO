<?php
namespace App\Entite;
class Equipe
{
    //définir les attributs
    private string $nom;
    private string $nombreLikes;
    #private Film $films;

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->nombreLikes = 0;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getNombreLikes(): string
    {
        return $this->nombreLikes;
    }

    public function incrementerNbLikes():Void{
        $this->nombreLikes ++;

    }

}