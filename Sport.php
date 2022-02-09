<?php

class Sport implements ISport
{
    protected $nomSport;
    protected $nbJoueurs;

    /**
     * @param $nomSport
     * @param $nbJoueurs
     */
    public function __construct(String $nomSport, int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    /**
     * @return String
     */
    public function getNomSport(): string
    {
        return $this->nomSport;
    }

    /**
     * @return int
     */
    public function getNbJoueurs(): int
    {
        return $this->nbJoueurs;
    }

    /**
     * @param int $nbJoueurs
     */
    public function getDescription(): String
    {
        return 'Description " Nom du sport: '.$this->nomSport.", Nb de joueurs: ".$this->nbJoueurs.'"<br>';
    }


}