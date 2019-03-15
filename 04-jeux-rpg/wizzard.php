<?php
class wizzard extends personnage {
    public function __construct($nom)
    {
        parent::__construct($nom);//on appel le parent pour eviter d'ecraser la class lors de l'appel du wwizzard
     $this->ptMana *=2; 
     
     
    }
    function castSpell($Objet_perso){
        if($Objet_perso==$this){
            echo("tu t'attaques idiot");
        }
        if($Objet_perso->ptVie<=0){
            echo("Je crois que je suis mort") ;
          } 
        $Objet_perso->ptvie-=$this->ptMana; 
    }
}