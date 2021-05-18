<?php

    class Partenaire{
        private $id;
        private $nom;
        private	$prenom;
        private	$adresse;
        private	$pdp;
        private	$tel; 

        function __construct($id,$nom,$prenom,$adresse,$pdp,$tel)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->adresse = $adresse; 
            $this->pdp = $pdp;
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
 
        public function getpdp()
        {
                return $this->pdp;
        }

        
        public function setpdp($pdp)
        {
                $this->pdp = $pdp;

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