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
	
class CvRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}
	/**
	 * Le cv d'un demandeur d'emploi
	 */
	public function get_cv_demandeur($id_demandeur){
        $query = $this->db
            ->createQuery('SELECT c FROM Cv c WHERE c.user = :id_demandeur')
            ->setParameter('id_demandeur', $id_demandeur);
        $user = $query->getSingleResult();
        return $user;
    }
	
	public function updateCv($cv){
		if($this->db != null)
		{
			$getCv = $this->db->find('Cv', $cv->getId());
			if($getCv != null)
			{
				$getCv->setExperience($cv->getExperience());
				$getCv->setFormation($cv->getFormation());
				$getCv->setCompetence($cv->getCompetence());
				$getCv->setDivers($cv->getDivers());
				$getCv->setUser($cv->getUser());
				$this->db->flush();
			}else {
				die("Objet ".$cv->getId()." does not existe!!");
			}	
		}
	}
	public function getUser($id)
    {
        return $this->db->getRepository("User")->find(array("id"=>$id));
    }
	public function addCv($cv)
	{
		if($this->db != null)
		{
			$this->db->persist($cv);
			$this->db->flush();

			return $cv->getId();
		}
	}
















	
	
	public function getProfil($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Profil')->find(array('id' => $id));
		}
	}
	public function nombre_cvs(){
        $query = $this->db->createQuery('SELECT COUNT(*) FROM cv');
        return $query->getResult();
    }
	
	public function listeCv(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT p FROM Cv p")->getResult();
		}
	}
	public function getCv($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Cv')->find(array('id' => $id));
		}
	}
	
	
	public function deleteCv($id){
		if($this->db != null)
		{
			$cv = $this->db->find('Cv', $id);
			if($cv != null)
			{
				$this->db->remove($cv);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	
	

	
	public function listeCvsById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Cv')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfCvsById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Cv t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfCvs()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Cv')->findAll();
		}
	}
	
}