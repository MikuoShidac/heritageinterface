<?php

class SportBallon extends Sport
{
    private $largeur;
    private $longueur;

    /**
     * @param $largeur
     * @param $longueur
     */
    public function __construct(string $nomSport, int $nbJoueurs, int $largeur, int $longueur)
    {
        parent::__construct($nomSport,$nbJoueurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    public function getDescription(): String
    {
        return 'Description " Nom du sport: '.$this->nomSport.", Nb de joueurs: ".$this->nbJoueurs.', longueur: '.$this->longueur.', largeur: '.$this->largeur.'"<br>';
    }
}