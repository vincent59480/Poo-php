<?php

class circle {

protected $rayon;
        public function __construct($rayon){
        $this->rayon=$rayon;
        }

        function area(){

            return "l'aire d'un cercle est de : ". round((($this->rayon * $this->rayon) * M_PI),2);
        }
        function perimetre()
        {
            return "Le périmetre du cercle ". round((2*M_PI* $this->rayon),2);
        }



}