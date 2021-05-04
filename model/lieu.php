<?php
class lieu 
{

 
	private $lieu;
	private $adress;
	  private $id ;
	 

	function __construct($lieu,$adress)
				{

		$this->lieu=$lieu;
		$this->adress=$adress;
		

				}

	function getid()
	{
		return $this->id;
	}
	function getlieu(){
		return $this->lieu;
	}
	function getadress(){
		return $this->adress;
	}
	
	
	

	function setlieu($lieu)
	{
		$this->lieu=$lieu;
	}
	function setadress($adress)
	{
		$this->adress=$adress;
	}
	function setid($id){
		$this->id=$id;
	}


	
	

}

?>
