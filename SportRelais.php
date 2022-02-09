<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomSport, int $distance, int $nbJoueurs)
    {
        parent::__construct($nomSport, $nbJoueurs);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    public function getDescription(): String
    {
        return 'Description " Nom du sport: '.$this->nomSport.', Distance du terrain: '.$this->distance.", Nb de joueurs: ".$this->nbJoueurs.'"<br>';
    }
}