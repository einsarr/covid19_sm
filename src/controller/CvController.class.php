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
use src\model\CvRepository;
use src\model\UserRepository;

class CvController extends Controller{
    public function __construct(){
        parent::__construct();
        session_start();
    }
    public function add(){
        $cv = new CvRepository();
        extract($_POST);
        $cvObject = new Cv();
        $cvObject->setExperience($experience);
        $cvObject->setFormation($formation);
        $cvObject->setCompetence($competence);
        $cvObject->setDivers($divers);
        $cvObject->setUser($cv->getUser($user_id));
        $cv->addCv($cvObject);
        echo json_encode("cv ajouté avec succès");
   }

    public function view($demandeur){
        $userdb = new UserRepository();
        $user = $userdb->getUser($demandeur);
        $data['user'] = $user;
        $cvs = new CvRepository();
        $data['cv'] = $cvs->get_cv_demandeur($demandeur);
        return $this->view->load("cv/view",$data);
    }
    public function edit($cv_id)
    {
        $cvs = new CvRepository();
        $cv =  $cvs->getCv($cv_id);
        $user = $cv->getUser();
        $data['user'] = $user;
        $data['cv'] = $cv;
        return $this->view->load("cv/edit",$data);
    }
    // public function edit($id){
    //     $cvs = new CvRepository();
    //     $data = $cvs->get_cv_demandeur($id);
    //     var_dump($id);exit;
    //     $output = array(
    //         'entete' => $data->getEntete(),
    //         'contenu' => $data->getContenu(),
    //     );
    //     echo json_encode($output);
    // }
   

    public function update(){
        $cv = new CvRepository();
        extract($_POST);
        $cvObject = new Cv();
        $cvObject->setId($cv_id);
        $cvObject->setExperience($experience);
        $cvObject->setFormation($formation);
        $cvObject->setCompetence($competence);
        $cvObject->setDivers($divers);
        $cvObject->setUser($cv->getUser($user_id));
        $ok = $cv->updateCv($cvObject);
        return $this->view($user_id);
    }
    












    /** 
     * url pattern for this method
     * localhost/projectName/Cv/
     */
    
    public function index(){
        $employeurs = new EmployeurRepository();
        $agences = new AgenceRepository();
        
        $data['employeurs'] = $employeurs->listeEmployeur();
        $data['agences']    =  $agences->listeAgence();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("cvs/type",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
    // public function add(){  
    //     $categories = new CategorieRepository();
    //     $data['categories'] = $categories->listeCategories();
    //     $this->view->load("cvs/add",$data);
    // } 
    public function save(){
        $cv = new CvRepository();
        
        extract($_POST);
        $cvObject = new Cv();
        $cvObject->setEntete(addslashes($entete));
        $cvObject->setContenu(addslashes($contenu));
        $cvObject->setUser($cv->getUser($user_id));
        $cv->addCv($cvObject);
        $data['message_success'] = "Enrégistrement réussie";
        $this->view->load("cvs/add",$data); 
       
    }


    public function getAgence($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('agence')->find(array('id' => $id));
		}
	}
    /** 
     * url pattern for this method
     * localhost/projectName/Cv/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("cv/get_id", $data);
    }
    
    public function get($id){
        
        $data['cv'] = $db->getCv($id);
        
        return $this->view->load("cv/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Cv/liste
     */
    public function liste(){
        $cv = new CvRepository();
        
        $data['cvs'] = $cv->listeCv();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("cvs/liste",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
    public function add_new_cv(){
        return $this->index();
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Cv/add
     */
    public function save_cpt_courant(){
        $cv = new CvRepository();
        $client = new ClientRepository();
        extract($_POST);
        $numero = substr($prenom, 0, 1)."".substr($nom, 0, 1).substr($cni, 5, 5).rand(1,1000);
        //Données client
        $clientObject = new Client();
        $clientObject->setPrenom(addslashes($prenom));
        $clientObject->setNom(addslashes($nom));
        $clientObject->setCni(addslashes($cni));
        $clientObject->setEmail(addslashes($email));
        $clientObject->setTelephone(addslashes($telephone));
        $clientObject->setAdresse(addslashes($adresse));
        $clientObject->setLogin(addslashes($login));
        $clientObject->setPassword(sha1(addslashes($password)));
        $clientObject->setEmployeur($client->getEmployeur($employeur_id));
        //Données cv courant
        $cvObject = new Cv();
        $date = new DateTime();
        $cvObject->setCreated_at($date);
        $cvObject->setNumero(addslashes($numero));
        $cvObject->setType_cv(addslashes($type_cv));
        $cvObject->setAgence($cv->getAgence($agence_id));
        $cvObject->setSolde(addslashes('0'));
        $cvObject->setEtat(addslashes('actif'));

        $client_id= $client->addClient($clientObject);
        $cvObject->setClient($cv->getClient($client_id));
        $cv->addCv($cvObject);
        echo "Insertion réussie avec succès";
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Cv/update
     */
    
     /** 
     * url pattern for this method
     * localhost/projectName/Cv/delete/value
     */
    public function delete($id){
        
        $tdb = new CvRepository();
        $tdb->deleteCv($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Cv/edit/value
     */
    // public function edit($id){
        
    //     $tdb = new CvRepository();
        
    //     $data['cv'] = $tdb->getCv($id);
    //     var_dump($tdb->getCv($id));
    //     return $this->view->load("cv/edit", $data);
    // }
}
?>