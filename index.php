<?php

class employe
    {
    private $nom;
    private $prenom;
    private $age;
    
    
    public function __construct($nom, $prenom, $age) 
    { 
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=(int)$age;
    }
        public function getNom()
        {
            return $this->nom;
        }

        public function setNom($nom)
        {
            
        }
    
    }
