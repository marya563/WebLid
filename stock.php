<?PHP
	class stock{
		private  $disponible = null;
		private  $id_stock = null;
		private  $nb_tickets = null;
		
		function __construct( $disponible, $nb_tickets){
			
			$this->disponible=$disponible;
			$this->nb_tickets=$nb_tickets;
			
		}
		
		function getStock(): int{
			return $this->id_stock;
		}
		function getDisponible(): string{
			return $this->disponible;
		}
		function getTickets(): string{
			return $this->nb_tickets;
		}

		

		function setDisponible(string $disponible): void{
			$this->disponible=$disponible;
		}
		function setTickets(string $nb_tickets): void{
			$this->nb_tickets;
		}
		
	
	}
?>