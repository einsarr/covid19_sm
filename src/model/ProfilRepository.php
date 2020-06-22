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
	
class ProfilRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getAll(){
        if($this->db != null)
        {
            return $this->db->createQuery("SELECT p FROM Profil p")->getResult();
        }
    }



















	public function addProfil($profil)
	{
		if($this->db != null)
		{
			$this->db->persist($profil);
			$this->db->flush();

			return $profil->getId();
		}
	}
	public function listeProfils(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT p FROM Profil p")->getResult();
		}
	}
	public function getProfil($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Profil')->find(array('id' => $id));
		}
	}
	
	
	public function deleteProfil($id){
		if($this->db != null)
		{
			$profil = $this->db->find('Profil', $id);
			if($profil != null)
			{
				$this->db->remove($profil);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateProfil($profil){
		if($this->db != null)
		{
			$getProfil = $this->db->find('Profil', $profil->getId());
			if($getProfil != null)
			{
				$getProfil->setLibelle($profil->getLibelle());
				$getProfil->setDescription($profil->getDescription());
				$getProfil->setEtat($profil->getEtat());
				$this->db->flush();
			}else {
				die("Objet ".$profil->getId()." does not existe!!");
			}	
		}
	}
	

	
	public function listeProfilsById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Profil')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfProfilsById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Profil t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfProfils()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Profil')->findAll();
		}
	}
	
}