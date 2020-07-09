<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/ 
use libs\system\Controller; 
use src\model\OffreRepository;
use src\model\CategorieRepository;
use src\model\UserRepository;

class OffreController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function add($user_id){
        $categories = new CategorieRepository();
        $data['categories'] = $categories->listeCategories();
        $userdb = new UserRepository();
        $user = $userdb->getUser($user_id);
        $data['user'] = $user;
        $this->view->load("offres/add",$data);
    }
    public function addAj(){
        $offre = new OffreRepository();
        extract($_POST);
        $offreObject = new Offre();
        $offreObject->setlibelle(addslashes($libelle));
        $offreObject->setFavori(addslashes($favori));
        $offreObject->setEntreprise($offre->getEntreprise($user_id));
        $offreObject->setCategorie($offre->getCategorie($categorie_id));
        $offre->addOffre($offreObject);
    }
    public function save(){
        $offre = new OffreRepository();
        extract($_POST);
        $offreObject = new Offre();
        $offreObject->setlibelle(addslashes($libelle));
        $offreObject->setFavori(addslashes($favori));
        $offreObject->setEntreprise($offre->getEntreprise($user_id));
        $offreObject->setCategorie($offre->getCategorie($categorie_id));
        $offre->addOffre($offreObject);

        $userdb = new UserRepository();
        $user = $userdb->getUser($user_id);
        $data['user'] = $user;
        $data['message_success'] = "Enrégistrement réussie";
        $this->view->load("offres/add",$data); 
    }
    public function liste($user_id){
        $offre = new OffreRepository();
        $userdb = new UserRepository();
        $categories = new CategorieRepository();
        $data['categories'] = $categories->listeCategories();
        $user = $userdb->getUser($user_id);
        $data['user'] = $user;
        $data['offres'] = $offre->get_offre_entreprise($user_id);
        $this->view->load("offres/liste",$data);
    }
    public function edit($user_id)
    {
        $offrerep = new OffreRepository();
        $offre =  $offrerep->getOffre($user_id);
        $user = $offrerep->getUser($user_id);
        $categories = new CategorieRepository();
        $data['categories'] = $categories->listeCategories();
        $data['user'] = $user;
        $data['offre'] = $offre;
        return $this->view->load("offres/edit",$data);
    }
    public function offre_search(){
        extract($_POST);
        $offres = new OffreRepository();
        $data['offres'] = $offres->listeOffresByKeyWord($motCle);
        $this->view->load("offres/offres_search",$data);
    }
    public function offref_search(){
        extract($_POST);
        $offres = new OffreRepository();
        $data['offres'] = $offres->listeOffresfByKeyWord($motCle);
        $this->view->load("offres/offre_favori",$data);
    }
    





















    /** 
     * url pattern for this method
     * localhost/projectName/Offre/
     */

    public function index(){
        $offre = new OffreRepository();
        $data['offres'] = $offre->listeOffres();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("offres/liste",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
   
     /** 
     * url pattern for this method
     * localhost/projectName/Offre/add
     */
    
    public function get($categorie_id){
        $categories = new CategorieRepository();
        $data['categories'] = $categories->listeCategories();
        $data['categorie'] = $categories->getCategorie($categorie_id);
        $this->view->load("offres/offres_categorie",$data);
    }
    
    public function postuler($offre_id){
        $data['offre'] = $offre_id;
        $this->view->load("offres/postuler",$data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Offre/edit/value
     */
    // public function edit($id){
        
    //     $offre = new OffreRepository();
    //     $employeur = new EmployeurRepository();
    //     $data['offre'] = $offre->getOffre($id);
    //     $data['employeurs'] = $employeur->listeEmployeur();

    //     $tab = array(
    //         $this->view->load("layout/header"),
    //         $this->view->load("layout/sidebar"),
    //         $this->view->load("layout/topbar"),
    //         $this->view->load("offres/edit",$data),
    //         $this->view->load("layout/footer"),
    //     );
    //     return $tab;
    // }
    //  /** 
    //  * url pattern for this method
    
    public function update(){
        $offre = new OffreRepository();
        extract($_POST);
        $offreObject = new Offre();
        $offreObject->setId($id);
        $offreObject->setPrenom(addslashes($prenom));
        $offreObject->setNom(addslashes($nom));
        $offreObject->setCni(addslashes($cni));
        $offreObject->setEmail(addslashes($email));
        $offreObject->setTelephone(addslashes($telephone));
        $offreObject->setAdresse(addslashes($adresse));
        $offreObject->setLogin(addslashes($login));
        $offreObject->setPassword(addslashes($password));
        $offreObject->setEmployeur($offre->getEmployeur($employeur_id));
        $offre->updateOffre($offreObject);
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Offre/getId/value
     */

    
    
    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("offres/get_id", $data);
    }
   
    /** 
     * url pattern for this method
     * localhost/projectName/Offre/liste
     */
    // public function liste(){
    //     $tdb = new OffreRepository();
        
    //     $data['offres'] = $tdb->listeOffres();
    //     return $this->view->load("offres/liste", $data);
    // }
    
    
     /** 
     * url pattern for this method
     * localhost/projectName/Offre/delete/value
     */
    public function delete($id){
        
        $tdb = new OffreRepository();
        $tdb->deleteOffre($id);
        return $this->index();
    }
    
}
?>