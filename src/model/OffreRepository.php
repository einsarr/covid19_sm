<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class OffreRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}
	public function addOffre($offre)
	{
		if($this->db != null)
		{
			$this->db->persist($offre);
			$this->db->flush();

			return $offre->getId();
		}
	}
	public function getCategorie($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Categorie')->find(array('id' => $id));
		}
	}
	/**
	 * Afficher l'entreprise provisoirement -- ça doit etre fait en session
	 */
	public function getEntreprise($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('User')->find(array('id' => $id));
		}
	}
	public function listeOffres(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT p FROM Offre p")->getResult();
		}
	}
	
	/**
	 * DQL
	 */
	public function listeOffresByKeyWord($motCle)
	{
		if($this->db != null)
		{
			$query = $this->db->createQuery("SELECT o FROM Offre o WHERE o.libelle LIKE '%$motCle%'");
			return $query->getResult();	
		}
	}
	public function listeOffresByIdCat($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Offre')->findAll(array('categorie_id' => $id));
		}
		
	}
	public function getOffre($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Offre')->find(array('categorie_id' => $id));
		}
	}
	
	
	public function deleteOffre($id){
		if($this->db != null)
		{
			$offre = $this->db->find('Offre', $id);
			if($offre != null)
			{
				$this->db->remove($offre);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateOffre($offre){
		if($this->db != null)
		{
			$getOffre = $this->db->find('Offre', $offre->getId());
			if($getOffre != null)
			{
				$getOffre->setLibelle($offre->getLibelle());
				$getOffre->setAdresse($offre->getAdresse());
				$getOffre->setStandard($offre->getStandard());
				$getOffre->setNumero_offre($offre->getNumero_offre());
				$this->db->flush();
			}else {
				die("Objet ".$offre->getId()." does not existe!!");
			}	
		}
	}
	

	
	public function listeOffresById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Offre')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfOffresById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Offre t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfOffres()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Offre')->findAll();
		}
	}
	
}