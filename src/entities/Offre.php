<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="offre")
 **/
class Offre
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
    /** @Column(type="integer") **/
    private $favori;
    /**
     * Many Offres have one User. This is the owning side.
     * @ManyToOne(targetEntity="User", inversedBy="offres")
     * @JoinColumn(name="entreprise_id", referencedColumnName="id")
     */
    private $entreprise;
    /**
     * Many Offres have one categorie. This is the owning side.
     * @ManyToOne(targetEntity="Categorie", inversedBy="offres")
     * @JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;
    /**
     * One Offre has many Reponses. This is the inverse side.
     * @OneToMany(targetEntity="Reponse", mappedBy="offre")
     */
    private $reponses;
    
    public function __construct()
    {
        $this->reponses       = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
    public function getFavori()
    {
        return $this->favori;
    }
    public function setFavori($favori)
    {
        $this->favori = $favori;
    }

    public function getReponses()
    {
        return $this->reponses;
    }
    
    public function setReponses($reponses)
    {
        $this->reponses = $reponses;
    }
    public function getEntreprise()
    {
        return $this->entreprise;
    }
    
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }
    public function getCategorie()
    {
        return $this->categorie;
    }
    
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

}

?>