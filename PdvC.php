<?PHP
	include "../config.php";
	require_once '../Model/Pdv.php';

	class pdvC {
		
		function ajouterpdv($pdv){
			$sql="INSERT INTO pdv (adresse_pdv, nom_pdv, nb_employee) 
			VALUES (:adresse_pdv,:nom_pdv,:nb_employee)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'adresse_pdv' => $pdv->getAdresse(),
					'nom_pdv' => $pdv->getNom(),
					'nb_employee' => $pdv->getNombre()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherpdv(){
			
			$sql="SELECT * FROM pdv";
			$db = config::getConnexion();
			try{
				$vente = $db->query($sql);
				return $vente;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerpdv($id_pdv){
			$sql="DELETE FROM pdv WHERE id_pdv= :id_pdv";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_pdv',$id_pdv);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierpdv($pdv, $id_pdv){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE pdv SET 
						adresse_pdv = :adresse_pdv, 
						nom_pdv = :nom_pdv,
						nb_employee = :nb_employee
					WHERE id_pdv = :id_pdv'
				);
				$query->bindValue(':adresse_pdv',$utilisateur->getAdresse());
				$query->bindValue(':nom_pdv',$utilisateur->getNom());
				$query->bindValue(':nb_employee',$utilisateur->getNombre());
				$query->bindValue(':id_pdv',$id_pdv);
				$query->execute();
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererpdv($id_pdv){
			$sql="SELECT * from pdv where id_pdv=$id_pdv";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$pdv=$query->fetch();
				return $pdv;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererpdv1($id_pdv){
			$sql="SELECT * from pdv where id_pdv=$id_pdv";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$pdv = $query->fetch(PDO::FETCH_OBJ);
				return $pdv;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>