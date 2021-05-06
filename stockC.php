<?PHP
	include "../config.php";
	require_once '../Model/stock.php';

	class stockC {
		
		function ajouterstock($stock){
            $sql="INSERT INTO stock (nb_tickets, disponible) 
			VALUES (:nb_tickets,:disponible)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nb_tickets' => $stock->getTickets(),
					'disponible' => $stock->getDisponible()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
            }
	}
		
		function afficherstock(){
			
			$sql="SELECT * FROM stock";
			$db = config::getConnexion();
			try{
				$st = $db->query($sql);
				return $st;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerstock($id_stock){
			$sql="DELETE FROM stock WHERE id_stock= :id_stock";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_stock',$id_stock);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
			function getPromotion($id_stock){
		$sql="SELECT * from stock where id_stock=$id_stock";
		$db = config::getConnexion();
		try{
		$compte=$db->query($sql);
		return $compte;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifierstock($stock, $id_stock){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE stock SET 
						nb_tickets = :nb_tickets, 
						disponible = :disponible,
					WHERE id_stock = :id_stock'
				);
				$query->bindValue(':nb_tickets',$utilisateur->getTickets());
				$query->bindValue(':disponible',$utilisateur->getDisponible());
				$query->bindValue(':id_stock',$id_stock);
				$query->execute();
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererstock($id_stock){
			$sql="SELECT * from stock where id_stock=$id_stock";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$stock=$query->fetch();
				return $stock;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
function recuperer()
	{
   		$sql="SELECT * from stock";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
		function recupererstock1($id_stock){
			$sql="SELECT * from stock where id_stock=$id_stock";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$stock = $query->fetch(PDO::FETCH_OBJ);
				return $stock;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
			function getAllcstock($keywords){
		$sql="SELECT * FROM stock WHERE CONCAT(`id_stock`,`nb_tickets`,`disponible`) LIKE '%".$keywords."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function triec(){
		$sql="SELECT * from stock order by nb_tickets desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function trieD(){
		$sql="SELECT * from stock order by nb_tickets asc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
		
	}