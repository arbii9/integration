<?php 

class Employe
{
	private $ID;
	private $Nom;
	private $Prenom;
	private $Sexe;
	private $Email;
	private $Type;
	private $Phone;
	private $Date_n;
	private $Date_h;
	
	function __construct($nom,$prenom,$sexe,$email,$type,$phone,$date_n,$date_h)
	{
		$this->ID = 0;
		$this->Nom = $nom;
		$this->Prenom = $prenom;
		$this->Sexe = $sexe;
		$this->Email = $email;
		$this->Type = $type;
		$this->Phone = $phone;
		$this->Date_h = $date_h;
		$this->Date_n = $date_n;
	}

	function getID()
	{
		return $this->ID;
	}
	function setID($id)
	{
		$this->ID = $id;
	}

	function getNom()
	{
		return $this->Nom;
	}
	function setNom($nom)
	{
		$this->Nom = $nom;
	}

	function getPrenom()
	{
		return $this->Prenom;
	}
	function setPrenom($prenom)
	{
		$this->Prenom = $prenom;
	}

	function getSexe()
	{
		return $this->Sexe;
	}
	function setSexe($sexe)
	{
		$this->Sexe = $sexe;
	}

	function getEmail()
	{
		return $this->Email;
	}
	function setEmail($email)
	{
		$this->Email = $email;
	}

	function getType()
	{
		return $this->Type;
	}
	function setType($type)
	{
		$this->Type = $type;
	}

	function getPhone()
	{
		return $this->Phone;
	}
	function setPhone($phone)
	{
		$this->Phone = $phone;
	}

	function getDate_n()
	{
		return $this->Date_n;
	}
	function setDate_n($date_n)
	{
		$this->Date_n = $date_n;
	}

	function getDate_h()
	{
		return $this->Date_h;
	}
	function setDate_h($date_h)
	{
		$this->Date_h = $date_h;
	}
}

 ?>