<?php

class Club implements Comparable
{
    private $idClub;
    private $nomClub;
    private $nbPoint;
    private $lesSports =[];

    /**
     * @param $idClub
     * @param $nomClub
     * @param $nbPoint
     * @param $lesSports
     */
    public function __construct($idClub, $nomClub, $nbPoint)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoint = $nbPoint;
    }

    /**
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @return mixed
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * @return mixed
     */
    public function getNbPoint()
    {
        return $this->nbPoint;
    }

    /**
     * @return mixed
     */
    public function getLesSports()
    {
        return $this->lesSports;
    }

    /**
     * @param mixed $lesSports
     */
    public function AjouterSports(Sport $sports): void
    {
        $this->lesSports[] = $sports;
    }


    public function compareTo(Club $club)
    {
        // TODO: Implement compareTo() method.
    }
}