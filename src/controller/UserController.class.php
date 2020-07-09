<?php
use libs\system\Controller;
use src\model\UserRepository;
use src\model\CvRepository;
class UserController extends Controller
{
    //private $data;
    public function __construct()
    {
        parent::__construct();
        // session_start();
        // if(isset($_SESSION['user_session'])) {
        //     $this->data['user'] = $_SESSION['user_session'];
        // } else {
        //     $this->view->redirect('Login');
        // }
    }
    public function view($demandeur){
        $userdb = new UserRepository();
        $user = $userdb->getUser($demandeur);
        $data['user'] = $user;
        $cvs = new CvRepository();
        // $cv = $cvs->get_cv_demandeur($demandeur);
        // if($cv != null)
        // {
        //     $data['cv'] = $cv;
        // }
        return $this->view->load("users/view",$data);
    }
    public function profil($demandeur){
        $userdb = new UserRepository();
        $user = $userdb->getUser($demandeur);
        $data['user'] = $user;
        return $this->view->load("users/profil",$data);
    }

    public function liste()
    {
        $userdb = new UserRepository();
        $this->data['users'] = $userdb->listeUser();

        return $this->view->load("users/liste", $this->data);
    }


}
?>
