<?php


class rectangle {
    protected $longueur;
    protected $largeur;

        public function __construct($longueur,$largeur) {
                $this->longueur=$longueur;
                $this->largeur=$largeur;
        }

        public function setLongueur($longueur){
            $this->longueur=$longueur;
            return $this;
        }
        public function setLargeur($largeur){
            $this->largeur=$largeur;
            return $this;
        }

        function area(){
            return  "l'aire du rectangle de longeur: ".$this->longueur." est de largeur: ".$this->largeur."est de :" .$this->longueur * $this->largeur."m2";

        }
        function perimetre(){

             return " le périmetre d'un rectangle est de :".(($this->longueur + $this->largeur))*2;
        }
}