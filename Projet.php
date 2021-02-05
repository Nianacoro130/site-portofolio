<?php

Class Projet {
    
    private $id;
    private $nom;
    private $image;
    private $description;
    private $date;


    public  function __construct(){}

    //getters
    function getId(){
        return $this->id;
    }

    function getNom(){
        return $this->nom;
    }

    function getImage(){
        return $this->image;
    }

    function getDescription(){
        return $this->description;
    }

    function getDate(){
        return $this->date;
    }

    //setters

    function setNom( string $nom){
        return $this->nom = $nom;
        return $this;
    }

    function setImage(string $image){
        return $this->image = $image;
        return $this
    }

    function setDescription(string $description){
        return $this->description = $description;
    }

    function setDate(DateTime $date){
        return $this->date = $date;
        return $this;
    }

}



?>