<?php
namespace App;

use App\Entite\Equipe;

class Championnat{
    private string $nom;
    //association avec Equipe (one to many)
    private array $equipes = [];

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getNombreEquipe(): int
    {
        return count($this->equipes);
    }

    public function ajouterEquipe(Equipe $equipe): void
    {
        $this->equipes[] = $equipe;
    }

}
