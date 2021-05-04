<?php
	include "PDO.php";
	require_once 'model/lieu.php';


class lieuC {

	function recupereretat($id)
    {
        $sql="SELECT * from lieu where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    


    
    function afficherlieu()
    {
        
        $sql="SElECT * From lieu";
        $db = config::getConnexion();
        try
        {
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }

    function supprimerlieu($id)
    {
        $sql="DELETE FROM lieu WHERE id = :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        $req->bindValue(':id',$_POST["id"]);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupererlieu($id){
        $sql="SELECT * from lieu where id =$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
    
            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
     }

     function modifierevenement($evenement,$id){
        try {
            $db = config1::getConnexion();
            $query = $db->prepare(
                'UPDATE lieu SET 
                    
                    lieu = :lieu, 
                    
                    adress = :adress

                   
                WHERE id = :id'
            );
            $query->execute([
                
                'lieu' => $evenement->getlieu(),
                'adress' => $evenement->getadress(),
                

                'id' => $id
            ]);
            echo $query->rowcount()."records UPDATED successfully <br>";
            
        }
         catch (PDOException $e)
          {
            $e->getMessage();
        }
    }

    function ajouterlieu($l){
        $sql="INSERT INTO lieu (lieu,adress) 
        VALUES (:lieu,:adress)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'lieu' => $l->getlieu(),
                'adress' => $l->getadress(),
                

                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

}

	

?>