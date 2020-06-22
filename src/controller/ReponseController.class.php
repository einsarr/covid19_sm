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
use src\model\ReponseRepository;

class ReponseController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function save(){
        $reponse = new ReponseRepository();
        
        extract($_POST);
        $reponseObject = new Reponse();
        $reponseObject->setlibelle(addslashes($libelle));
        $reponseObject->setDescription(addslashes($description));
        $reponseObject->setOffre($reponse->getOffre($offre_id));
        $reponse->addReponse($reponseObject);
        $data['message_success'] = "Enrégistrement réussie";
        $this->view->load("offres/postuler",$data); 
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Reponse/
     */

    public function index(){
        $reponse = new ReponseRepository();
        $data['reponses'] = $reponse->listeReponse();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("reponses/liste",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
    public function add(){
        $employeur = new EmployeurRepository();
        $data['employeurs'] = $employeur->listeEmployeur();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("reponses/add",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     
    /** 
     * url pattern for this method
     * localhost/projectName/Reponse/edit/value
     */
    public function edit($id){
        
        $reponse = new ReponseRepository();
        $employeur = new EmployeurRepository();
        $data['reponse'] = $reponse->getReponse($id);
        $data['employeurs'] = $employeur->listeEmployeur();

        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("reponses/edit",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Reponse/update
     */
    public function update(){
        $reponse = new ReponseRepository();
        extract($_POST);
        $reponseObject = new Reponse();
        $reponseObject->setId($id);
        $reponseObject->setPrenom(addslashes($prenom));
        $reponseObject->setNom(addslashes($nom));
        $reponseObject->setCni(addslashes($cni));
        $reponseObject->setEmail(addslashes($email));
        $reponseObject->setTelephone(addslashes($telephone));
        $reponseObject->setAdresse(addslashes($adresse));
        $reponseObject->setLogin(addslashes($login));
        $reponseObject->setPassword(addslashes($password));
        $reponseObject->setEmployeur($reponse->getEmployeur($employeur_id));
        $reponse->updateReponse($reponseObject);
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Reponse/getId/value
     */

    
    
    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("reponses/get_id", $data);
    }
    public function get($id){
        
        $data['reponse'] = $tdb->getReponse($id);
        
        return $this->view->load("reponses/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Reponse/liste
     */
    public function liste(){
        $tdb = new ReponseRepository();
        
        $data['reponses'] = $tdb->listeReponse();
        return $this->view->load("reponses/liste", $data);
    }
    
    
     /** 
     * url pattern for this method
     * localhost/projectName/Reponse/delete/value
     */
    public function delete($id){
        
        $tdb = new ReponseRepository();
        $tdb->deleteReponse($id);
        return $this->index();
    }
    
}
?>