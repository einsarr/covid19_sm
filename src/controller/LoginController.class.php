<?php
use libs\system\Controller;
use src\model\UserRepository;
class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        return $this->view->load("admin/accueil");
    }
    
    public function login()
    {
        return $this->view->load("admin/login");
    }
    public function logon()
    {
        extract($_POST);
        $user = null;
        try {
            $userdb = new UserRepository();
            $user = $userdb->getUserByLogin($email, sha1($password));
            if($user != null) {
                if($user->getIs_email_confirm()=='yes')
                {
                    session_start();
                //var_dump($user->getRole()->getNom());exit;
                    //$_SESSION['user_session'] = $user;
                    //return $this->view->redirect('Welcome');

                    $data['user'] = $user;
                    return $this->view->load("admin/dashboard", $data);
                }
                else{
                    $data['login_error'] = 'Veuillez confirmer votre inscription svp';
                    return $this->view->load("admin/login", $data);
                }
            } else {
                return $this->view->redirect('Login');
            }
        }catch (Exception $ex) {
            $data['login_error'] = 'Email ou mot de passe incorrect !';
            return $this->view->load("admin/login", $data);
        }

    }
    public function logout()
    {
        session_start();
        $_SESSION['user_session'] = '';
        session_destroy();
        return $this->view->load("admin/accueil");
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
