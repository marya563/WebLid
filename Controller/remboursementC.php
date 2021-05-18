<?PHP
/*include_once "config.php";
class RembourcementC{

    function ajouterRebousement($remboursement){
        $sql="INSERT INTO remboursement ( id, idRec , avis , duree ) 
        VALUES (:id, :idRec, :avis, :duree)";
        $db = config::getConnexion();
        try{    
            $req=$db->prepare($sql);
            $id=$remboursement->getid();
            $idRec=$remboursement->getIdRec();
            $avis=$remboursement->getAvis();
            $duree=$remboursement->getDuree(); 
             
            $req->bindValue(':id',$id);
            $req->bindValue(':idRec',$idRec); 
            $req->bindValue(':avis',$avis);
            $req->bindValue(':duree',$duree); 
           
            
            $req->execute();
        }catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
    }  
    function afficherRemboursement(){
        $sql="SELECT * From remboursement";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
    function supprimerRemboursement($code){
        $sql="DELETE FROM remboursment where code=:code";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        } 

    }  

    function modifierRemboursement($remboursement,$code){
        $sql="UPDATE remboursement SET id=:idn, idRec=:idRec, avis=:avis, duree=:duree
           WHERE code=:code";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $idn=$remboursement->getId();
            $idRec=$remboursement->getIdRec();
            $avis=$remboursement->getAvis();
            $duree=$remboursement->getDuree(); 
             
            $datas = array(':id'=>$id,':idRec'=>$idRec , ':avis'=>$avis, 
            ':duree'=>$duree );

            $req->bindValue(':id',$id);
            $req->bindValue(':idRec',$idRec); 
            $req->bindValue(':avis',$avis);
           
            $req->bindValue(':duree',$duree);
           
            
            $s=$req->execute();
        }catch(Exception $e){
            echo "Erreur : ".$e->getMessage(); 
            echo "Les Datas : " ;
            print_r($datas);
            
            die;
        }
    } 
   
    
   
} 

?> 