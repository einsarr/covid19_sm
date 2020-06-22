<?php
use libs\system\Controller;
use src\model\UserRepository;
use src\service\mail\SamaneMailing;
use src\model\ProfilRepository;
class RegisterController extends Controller
{
    private $url_base;
    public function __construct()
    {
        parent::__construct();
        $this->url_base="http://localhost:8081/my_projects/frameworks/covid19_sm/";
    }
    public function index()
    {
        $profil = new ProfilRepository();
        $data['profils'] = $profil->getAll();
        return $this->view->load("users/register",$data);
    }

    public function registe()
    {
        extract($_POST);
        $userdb = new UserRepository();
        $user = new User();
        $user->setNom_complet($nom_complet);
        $user->setEmail($email);
        $user->setTelephone($telephone);
        $user->setAdresse($adresse);
        $user->setPassword(sha1($password));
        $user->setIs_email_confirm('no');
        $profil = $userdb->getProfil($profil_id);
        $user->setProfil($profil);
        $userdb->addUser($user);

        //$data['message_success'] = 'Un mail vous est envoyé sur '.$email.' pour une confirmation';
        $mail = new SamaneMailing();
        $passwo = sha1($password);
        $from = 'moussa.sarr1@3iweb.org';
        $companyName = 'SAMANE FRAMEWORK';
        $recipients = array("$email");
        $subject = 'Samane - Confirmation d inscription';
        $body = "<b>Salut ".$nom_complet.".<br>Samane vous remercie de votre engagement.</b>
        <h2><a href='{$this->url_base}Register/confirm_email/{$passwo}'>Cliquez-ici</a> pour confirmer l'inscription</h2>";
        $replyTo = null;
        $cc = null;
        $bcc = null;
        $attachments ='' ;
        $result = $mail->sendMail($from, $companyName, $recipients, $replyTo, $cc, $bcc, $attachments , $subject, $body);
        if($result)
        {
            $data['message_success'] = 'Un mail vous est envoyé sur '.$email.' pour une confirmation';
        } else {
            $data['message_error'] = 'Message could not be sent';
        }

        $this->view->load("users/register",$data);
    }

    public function confirm_email($verification_key)
    {
        $user = new UserRepository();
        $resultat = $user->confirm_email($verification_key);
        $resultat->setIs_email_confirm('yes');
        $ok = $user->updateUser($resultat);
            $data['message_success'] = "
            <h3 align='center'>
            Inscription confirmer avec succès. <a href='{$this->url_base}Login/login'>Se connecter</a>
            </h3>";
        $this->view->load("users/register",$data);
    }
}
?>
