<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="cv")
 **/
class Cv 
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $experience;
    /** @Column(type="string") **/
    private $formation;
    /** @Column(type="string") **/
    private $competence;
    /** @Column(type="string") **/
    private $divers;
    
    /**
     * One CV has One User.
     * @OneToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    public function __construct()
    {
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getExperience()
    {
        return $this->experience;
    }
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }
    public function getFormation()
    {
        return $this->formation;
    }
    public function setFormation($formation)
    {
        $this->formation = $formation;
    }
    public function getCompetence()
    {
        return $this->competence;
    }
    public function setCompetence($competence)
    {
        $this->competence = $competence;
    }
    public function getDivers()
    {
        return $this->divers;
    }
    public function setDivers($divers)
    {
        $this->divers = $divers;
    }
}

?>