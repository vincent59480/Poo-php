<?php

class personnage {
    private $nom;
    protected $ptVie=100;
    protected $ptForce=10;
    protected $ptMana=10;

        
public function __construct($nom){
    $this->nom=$nom;
}

        public function attack($Objet_perso){
            if($Objet_perso==$this){
                echo("tu t'attaques idiot");
            }
        //    l'attaque dépend de la force du perso attaquant
        if($Objet_perso->ptVie<=0){
          echo("Je crois que je suis mort") ;
        }   
        $Objet_perso->ptVie -= $this->ptForce;
           
        }
    
     

}