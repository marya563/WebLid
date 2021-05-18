<?PHP
include_once "config.php";
class PartenaireC{

    function ajouterPartenaire($partenaire){
        $sql="INSERT INTO partenaire ( id, nom, prenom, adresse , pdp, tel ) 
        VALUES (:id, :nom, :prenom, :adresse, :pdp, :tel)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id=$partenaire->getid();
            $nom=$partenaire->getnom();
            $prenom=$partenaire->getprenom();
            $adresse=$partenaire->getadresse(); 
            $pdp=$partenaire->getpdp();
            $tel=$partenaire->gettel(); 
            $req->bindValue(':id',$id);
            $req->bindValue(':nom',$nom); 
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':adresse',$adresse); 
            $req->bindValue(':pdp',$pdp);
            $req->bindValue(':tel',$tel); 
            
            $req->execute();
        }catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
    }  
    function afficherPartenaire(){
        $sql="SELECT * From partenaire";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
    function supprimerPartenaire($id){
        $sql="DELETE FROM partenaire where id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        } 

    }  

    function modifierPartenaire($partenaire,$id){
        $sql="UPDATE partenaire SET id=:idn, nom=:nom, prenom=:prenom, adresse=:adresse, pdp=:pdp ,
         tel=:tel  WHERE id=:id";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $idn=$partenaire->getid();
            $nom=$partenaire->getnom();
            $prenom=$partenaire->getprenom();
            $adresse=$partenaire->getadresse(); 
            $pdp=$partenaire->getpdp();
            $tel=$partenaire->gettel(); 
            $datas = array(':id'=>$id,':nom'=>$nom , ':prenom'=>$prenom, ':adresse'=>$adresse, 
            ':pdp'=>$pdp,':tel'=>$tel );

            $req->bindValue(':id',$id);
            $req->bindValue(':nom',$nom); 
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':adresse',$adresse); 
            $req->bindValue(':pdp',$pdp);
            $req->bindValue(':tel',$tel); 
            
            $s=$req->execute();
        }catch(Exception $e){
            echo "Erreur : ".$e->getMessage(); 
            echo "Les Datas : " ;
            print_r($datas);
            
            die;
        }
    } 
    function recupererPartenaire($id){
		$sql="SELECT * from partenaire where id='".$id."' ";
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