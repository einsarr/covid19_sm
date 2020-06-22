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
	
class ReponseRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}
	public function getOffre($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Offre')->find(array('id' => $id));
		}
	}
	public function getProfil($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Profil')->find(array('id' => $id));
		}
	}
	public function nombre_reponses(){
        $query = $this->db->createQuery('SELECT COUNT(*) FROM reponse');
        return $query->getResult();
    }
	public function addReponse($reponse)
	{
		if($this->db != null)
		{
			$this->db->persist($reponse);
			$this->db->flush();

			return $reponse->getId();
		}
	}
	public function listeReponse(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT p FROM Reponse p")->getResult();
		}
	}
	public function getReponse($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Reponse')->find(array('id' => $id));
		}
	}
	
	
	public function deleteReponse($id){
		if($this->db != null)
		{
			$reponse = $this->db->find('Reponse', $id);
			if($reponse != null)
			{
				$this->db->remove($reponse);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateReponse($reponse){
		if($this->db != null)
		{
			$getReponse = $this->db->find('Reponse', $reponse->getId());
			if($getReponse != null)
			{
				$getReponse->setPrenom($reponse->getPrenom());
				$getReponse->setNom($reponse->getNom());
				$getReponse->setCni($reponse->getCni());
				$getReponse->setEmail($reponse->getEmail());
				$getReponse->setTelephone($reponse->getTelephone());
				$getReponse->setAdresse($reponse->getAdresse());
				$getReponse->setEmployeur($reponse->getEmployeur());
				$this->db->flush();
			}else {
				die("Objet ".$reponse->getId()." does not existe!!");
			}	
		}
	}
	

	
	public function listeReponsesById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Reponse')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfReponsesById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Reponse t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfReponses()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Reponse')->findAll();
		}
	}
	
}