<?php
class warrior extends personnage {
    
    public function __construct($nom)
    {
     parent::__construct($nom);//on appel le parent pour eviter d'ecraser la class lors de l'appel du warior
        $this->ptForce *=2;   
    }

}