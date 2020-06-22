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
use src\model\ProfilRepository;

class ProfilController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Profil/
     */

    public function index(){
        $profil = new ProfilRepository();
        $data['profils'] = $profil->listeProfil();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("profils/liste",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
    public function add(){
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("profils/add"),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Profil/add
     */
    public function save(){
        $profil = new ProfilRepository();
            extract($_POST);
            $data['ok'] = 0;
            if(!empty($libelle) && !empty($description) && !empty($etat_profil)) {
                
                $profilObject = new Profil();
                
                $profilObject->setLibelle(addslashes($libelle));
                $profilObject->setDescription(addslashes($description));
                $profilObject->setEtat(addslashes($etat_profil));

                $ok = $profil->addProfil($profilObject);
                $data['ok'] = $ok;
            }
            return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Profil/edit/value
     */
    public function edit($id){
        
        $profil = new ProfilRepository();
        $data['profil'] = $profil->getProfil($id);

        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("profils/edit",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Profil/update
     */
    public function update(){
        $profil = new ProfilRepository();
       // if(isset($_POST['modifier'])){
            extract($_POST);
            //if(!empty($id) && !empty($libelle) && !empty($description) && !empty($etat_profil)) {
                $profilObject = new Profil();
                $profilObject->setId($id);
                $profilObject->setLibelle(addslashes($libelle));
                $profilObject->setDescription(addslashes($description));
                $profilObject->setEtat(addslashes($etat_profil));
                $ok = $profil->updateProfil($profilObject);
           // }
        //}
        
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Profil/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("profils/get_id", $data);
    }
    
    public function get($id){
        
        $data['profil'] = $tdb->getProfil($id);
        
        return $this->view->load("profils/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Profil/liste
     */
    public function liste(){
        $tdb = new ProfilRepository();
        
        $data['profils'] = $tdb->listeProfil();
        return $this->view->load("profils/liste", $data);
    }
    
    
     /** 
     * url pattern for this method
     * localhost/projectName/Profil/delete/value
     */
    public function delete($id){
        
        $tdb = new ProfilRepository();
        $tdb->deleteProfil($id);
        return $this->index();
    }
    
}
?>