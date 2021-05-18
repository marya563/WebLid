<?php
   /* class Rembousement {
        private $code;
        private $id;
        private  $idRec;
        private  $avis=null;
        private  $duree=null; 
       

         function __construct($idRec,$id, $avis, $duree) {
            $this->idRec= $idRec;
            $this->id= $id;
            $this->avis= $avis;
            $this->duree= $duree;

           
        }
         function getId() {
            return $this->id;
        }
        function setId( $id){
            $this->id = $id; 
        }
         function getIdRec (){
            return $this->idRec;
        }
        function setIdRec( $idRec){
            $this->idRec = $idRec; 
        }
         function getCode (){
            return $this->code;
        }
        
         function getAvis (){
            return $this->avis;
        }

         function setAvis (string $avis) {
            $this->avis = $avis;
        }

         function getDuree (){
            return $this->duree;
        }

         function setDuree(string $duree) {
            $this->duree = $duree ;
        }
        
    }