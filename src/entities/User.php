<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="user")
 **/
class User
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom_complet;
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $password;
    /** @Column(type="string") **/
    private $telephone;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string") **/
    private $is_email_confirm;
    /**
     * Many User have one Profil. This is the owning side.
     * @ManyToOne(targetEntity="Profil", inversedBy="users")
     * @JoinColumn(name="profil_id", referencedColumnName="id")
     */
    private $profil;
    /**
     * Many Users have Many Reponse.
     * @ManyToMany(targetEntity="Reponse", inversedBy="users")
     * @JoinTable(name="users_reponses")
     */
    private $reponses;
    
    public function __construct()
    {
        $this->reponses = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom_complet()
    {
        return $this->nom_complet;
    }
    public function setNom_complet($nom_complet)
    {
        $this->nom_complet = $nom_complet;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    

    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }


    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getProfil()
    {
        return $this->profil;
    }
    public function setProfil($profil)
    {
        $this->profil = $profil;
    }

    public function getIs_email_confirm()
    {
        return $this->is_email_confirm;
    }
    public function setIs_email_confirm($is_email_confirm)
    {
        $this->is_email_confirm = $is_email_confirm;
    }
    
    public function getReponses()
    {
        return $this->reponses;
    }
    public function setReponses($reponses)
    {
        $this->reponses = $reponses;
    }

    public function hasRole($nom)
    {
        $bol = 0;
        foreach ($this->roles as $role)
        {
            if($role->getNom() == $nom)
            {
                $bol = 1;
            }
        }
        return $bol;
    }
}

?>
