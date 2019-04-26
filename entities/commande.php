<?php 
class commande{
	//private $id; 
	private $nom; 
	private $prenom;
	private $datec; 
	private $email;
	private $numero; 
	//private $somme;  
	
	
	public function __construct($nom,$prenom,$datec,$email,$numero){
		//$this->id= $id; 
		$this->nom=$nom; 
		$this->prenom=$prenom; 
		$this->datec=$datec; 
		$this->email=$email;
		$this->numero=$numero; 
		//$this->somme=$somme; 
	} 
	
	 public function getNom() 
	{
		return $this->nom; 
	} 
	public function getPrenom() 
	{
		return $this->prenom; 
	} 
	public function getDatec() 
	{
		return $this->datec; 
	} 
	public function getEmail() 
	{
		return $this->email; 
	}
	public function getNumero() 
	{
		return $this->numero; 
	}
	
	public function setNom($nom) 
	{
		$this->nom=$nom;
	} 
	
	public function setPrenom($prenom) 
	{
		$this->prenom=$prenom;
	} 
	
	public function setDatec($datec) 
	{
		$this->datec=$datec;
	}
	
	public function setEmail($email) 
	{
		$this->email=$email;
	}
	public function setNumero($Numero) 
	{
		$this->Numero=$Numero;
	}
}

?>