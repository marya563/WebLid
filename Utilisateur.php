<?php

    class Utilisateur{
        private $id;
        private $nom;
        private	$prenom;
        private	$adresse;
        private	$sexe;
        private	$tel; 

        function __construct($id,$nom,$prenom,$adresse,$sexe,$tel)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->adresse = $adresse; 
            $this->sexe = $sexe;
            $this->tel = $tel; 



        }   
      
        
        public function getid()
        {
                return $this->id;
        }
        public function setid($id)
        {
                $this->id = $id;

               
        }

        public function getnom()
        {
                return $this->nom;
        }

       
        public function setnom($nom)
        {
                $this->nom = $nom;

        }

        
        public function getprenom()
        {
                return $this->prenom;
        }

        
        public function setprenom($prenom)
        {
                $this->prenom = $prenom;

        }

        
        public function getadresse()
        {
                return $this->adresse;
        }

        public function setadresse($adresse)
        {
                $this->adresse = $adresse;

        }
 
        public function getsexe()
        {
                return $this->sexe;
        }

        
        public function setsexe($sexe)
        {
                $this->sexe = $sexe;

        }

        
        public function gettel()
        {
                return $this->tel;
        }

        public function settel($tel)
        {
                $this->tel = $tel;

        }
        
    }
?>