<?php 
class sav{
	private $id_commande; 
	private $type; 
	private $description;
	private $nbre_etoile; 
	
	
	public function __construct($id_commande,$type,$description,$nbre_etoile){
		$this->id_commande= $id_commande; 
		$this->type=$type; 
		$this->description=$description; 
		$this->nbre_etoile=$nbre_etoile; 
		
	} 
	
	 public function getID() 
	{
		return $this->id_commande; 
	} 
	public function getType() 
	{
		return $this->type; 
	} 
	public function getDescription() 
	{
		return $this->description; 
	} 
	public function getNbre_etoile() 
	{
		return $this->nbre_etoile; 
	}
	
	
	public function setId($id_commande) 
	{
		$this->id_commande=$id_commande;
	} 
	
	public function setType($type) 
	{
		$this->type=$type;
	} 
	
	public function setDescription($description) 
	{
		$this->description=$description;
	}
	
	public function setNbre_etoile($nbre_etoile) 
	{
		$this->nbre_etoile=$nbre_etoile;
	}
	
}

?>