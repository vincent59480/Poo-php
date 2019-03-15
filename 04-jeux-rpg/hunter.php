<?php
class hunter extends personnage {
    function rangeAttack($Objet_perso){
        if($Objet_perso==$this){
            echo("tu t'attaques idiot");
        }     

        if($Objet_perso->ptVie==0){
            echo("Je crois que je suis mort") ;
          } 
        $Objet_perso->ptVie -= $this->ptForce *2;

    }

}