<?php

class reclamation
{
    private $id_user;
	private $nom;
	private $prenom;
    private $email;
    private $typeRec;
    private $idRec;
    private $commentaire;

	function __construct($id_user,$nom,$prenom,$email,$typeRec,$idRec,$commentaire)
	{
		$this->id_user=$id_user;
		$this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->typeRec=$typeRec;
        $this->idRec=$idRec;
        $this->commentaire=$commentaire;
	}
    
    public function getId_user()
    {
        return $this->id_user;
    }

    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
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
    
    public function getemail()
    {
        return $this->email;
    }
    
    public function setemail($email)
    {
        $this->email = $email;
    }
    
    public function gettypeRec()
    {
        return $this->typeRec;
    }
    
    public function settypeRec($typeRec)
    {
        $this->typeRec = $typeRec;
    }
    public function getidRec()
    {
        return $this->idRec;
    }
    
    public function setidRec($idRec)
    {
        $this->idRec = $idRec;
    }
    public function getcommentaire()
    {
        return $this->commentaire;
    }
    
    public function setcommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }
    
    
}
?>