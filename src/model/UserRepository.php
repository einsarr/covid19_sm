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
	
class UserRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getUser($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('User')->find(array('id' => $id));
		}
	}
	public function getProfil($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Profil')->find(array('id' => $id));
		}
	}
	public function confirm_email($verification_key)
	{
		$query =  $this->db->createQuery("SELECT u FROM User u WHERE u.password=:password")
						->setParameter('password',$verification_key);
			$user = $query->getSingleResult();
			return $user;
	}
	
	public function addUser($user)
	{
		if($this->db != null)
		{
			$this->db->persist($user);
			$this->db->flush();

			return $user->getId();
		}
	}
	
	public function deleteUser($id){
		if($this->db != null)
		{
			$user = $this->db->find('User', $id);
			if($user != null)
			{
				$this->db->remove($user);
				$this->db->flush();
			}else {
				die("Objet ".$id." n'existe pas");
			}
		}
	}
	
	public function updateUser($user){
		if($this->db != null)
		{
			$u = $this->db->find('User', $user->getId());
			if($u != null)
			{
				$u->setNom_complet($user->getNom_complet());
				$u->setEmail($user->getEmail());
                $u->setTelephone($user->getTelephone());
                $u->setPassword($user->getPassword());
                $u->setAdresse($user->getAdresse());
                $u->setIs_email_confirm($user->getIs_email_confirm());
                $u->setProfil($user->getProfil());
				$this->db->flush();

			}else {
				die("Objet ".$user->getId()." n'existe pas!!");
			}	
		}
	}
	
	public function listeUser(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT u FROM User u")->getResult();// array of User objects
		}
	}
	

	
	public function getUserByLogin($email, $password)
	{
        $query = $this
                    ->db
                    ->createQuery('SELECT u FROM User u 
                                    WHERE u.email = :em 
                                    AND u.password = :pwd');
        $query->setParameter('em', $email);
        $query->setParameter('pwd', $password);
        $user = $query->getSingleResult();
	    return $user;

        //return $this->db->getRepository('User')->find(array('email' => $email, 'password' => $password));
	}

    public function getRoleByName($nom){
        $query = $this->db
            ->createQuery('SELECT r FROM Roles r WHERE r.nom = :nomR')
            ->setParameter('nomR', $nom);
        $role = $query->getSingleResult();
        return $role;
    }
	
}
