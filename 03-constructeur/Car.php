<?php

class Car {
    private $marque;
    private $model;
    private $couleur;
   
    public function __construct($marque,$model,$couleur=null)
    {
        $this->marque= $marque;
        $this->model=$model;
        $this->couleur=$couleur;
           
    }

    public function setMarque($marque){
        $this->marque=$marque;
        return $this;
    }
    public function setModel($model){
        $this->model=$model;
        return $this;
    }
    public function setCouleur($couleur){
        $this->couleur=$couleur;
        return $this;
    }



    function drive(){
        return "".$this->marque." " .$this->model." qui roule sur ses 4 pneus";
    }
    function klaxon(){
        return "La ".$this->marque." ".$this->model. " ".$this->couleur." klaxone dans le PDC";
    }
}

class Moto {
    private $marque;
    private $model;
    private $couleur;
   
    public function __construct($marque,$model,$couleur=null)
    {
        $this->marque= $marque;
        $this->model=$model;
        $this->couleur=$couleur;
           
    }

    public function setMarque($marque){
        $this->marque=$marque;
        return $this;
    }
    public function setModel($model){
        $this->model=$model;
        return $this;
    }
    public function setCouleur($couleur){
        $this->couleur=$couleur;
        return $this;
    }



    function drive(){
        return "la ".$this->marque." " .$this->model." roule très vite";
    }
    function klaxon(){
        return "La ".$this->marque." ".$this->model. " ".$this->couleur." klaxone";
    }
}