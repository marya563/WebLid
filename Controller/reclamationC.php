<?php
include 'config.php';

class reclamationC
{

    function afficherReclamations()
    {

        $sql="select * from reclamation";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


    function afficherReclamation()
    {

        $sql="SELECT * From reclamation";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierReclamation($id_user,$nom,$prenom,$email,$typeRec,$idRec,$commentaire)
    {
        $sql="update reclamation set nom ='$nom',prenom='$prenom',email='$email',typeRec='$typeRec',idRec='$idRec',commentaire='$commentaire' where id_user ='$id_user'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerReclamation($id_user){
        $sql="DELETE FROM reclamation where id_user=:id_user";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_user',$id_user);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouterReclamation($rec){

        $id_user=$rec->getId_user();
        $nom=$rec->getnom();
        $prenom=$rec->getprenom();
        $email=$rec->getemail();
        $typeRec=$rec->gettypeRec();
        $idRec=$rec->getidRec();
        $commentaire=$rec->getcommentaire();

        $sql="INSERT INTO reclamation (id_user, nom, prenom, email, typeRec, idRec, commentaire ) VALUES ('$id_user','$nom','$prenom','$email','$typeRec','$idRec','$commentaire')";

        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur'.$e->getMessage());
        }
    }
}