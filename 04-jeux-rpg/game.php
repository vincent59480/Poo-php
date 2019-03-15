<?php

class game {
private $joueurs=[];

    public function addPlayer($personnage)
    {
        $this->joueurs[]= $personnage;

    }
    public function getPlayer(){
        return $this->joueurs;
    }
}