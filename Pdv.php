<?PHP
	class pdv{
		private  $id_pdv = null;
		private  $adresse_pdv = null;
		private  $nom_pdv = null;
		private  $nb_employee = null;
		
		function __construct(string $adresse_pdv, string $nom_pdv, string $nb_employee){
			
			$this->adresse_pdv=$adresse_pdv;
			$this->nom_pdv=$nom_pdv;
			$this->nb_employee=$nb_employee;
			
		}
		
		function getid_pdv(): int{
			return $this->id_pdv;
		}
		function getAdresse(): string{
			return $this->adresse_pdv;
		}
		function getNom(): string{
			return $this->nom_pdv;
		}

		function getNombre(): int{
			return $this->nb_employee;
		}
		

		function setAdresse(string $adresse_pdv): void{
			$this->adresse_pdv=$adresse_pdv;
		}
		function setNom(string $nom_pdv): void{
			$this->nom_pdv;
		}
		
		function setNombre(int $nb_employee): void{
			$this->nb_employee=$nb_employee;
		}
	
	}
?>