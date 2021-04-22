<?PHP
include_once "../../config.php";
class UtilisateurC{

    function ajouterUtilisateur($utilisateur){
        $sql="INSERT INTO utilisateur ( id, nom, prenom, adresse , sexe, tel ) 
        VALUES (:id, :nom, :prenom, :adresse, :sexe, :tel)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id=$utilisateur->getid();
            $nom=$utilisateur->getnom();
            $prenom=$utilisateur->getprenom();
            $adresse=$utilisateur->getadresse(); 
            $sexe=$utilisateur->getsexe();
            $tel=$utilisateur->gettel(); 
            $req->bindValue(':id',$id);
            $req->bindValue(':nom',$nom); 
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':adresse',$adresse); 
            $req->bindValue(':sexe',$sexe);
            $req->bindValue(':tel',$tel); 
            
            $req->execute();
        }catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
    }  
    function afficherUtilisateur(){
        $sql="SELECT * From utilisateur";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
    function supprimerUtilisateur($id){
        $sql="DELETE FROM utilisateur where id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        } 

    }  

    function modifierUtilisateur($utilisateur,$id){
        $sql="UPDATE utilisateur SET id=:idn, nom=:nom, prenom=:prenom, adresse=:adresse, sexe=:sexe ,
         tel=:tel  WHERE id=:id";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $idn=$utilisateur->getid();
            $nom=$utilisateur->getnom();
            $prenom=$utilisateur->getprenom();
            $adresse=$utilisateur->getadresse(); 
            $sexe=$utilisateur->getsexe();
            $tel=$utilisateur->gettel(); 
            $datas = array(':id'=>$id,':nom'=>$nom , ':prenom'=>$prenom, ':adresse'=>$adresse, 
            ':sexe'=>$sexe,':tel'=>$tel );

            $req->bindValue(':id',$id);
            $req->bindValue(':nom',$nom); 
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':adresse',$adresse); 
            $req->bindValue(':sexe',$sexe);
            $req->bindValue(':tel',$tel); 
            
            $s=$req->execute();
        }catch(Exception $e){
            echo "Erreur : ".$e->getMessage(); 
            echo "Les Datas : " ;
            print_r($datas);
            
            die;
        }
    } 
    function recupererUtilisateur($id){
		$sql="SELECT * from utilisateur where id='".$id."' ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die(    'Erreur: '.$e->getMessage());
        }
    }
    
   
} 

?> 