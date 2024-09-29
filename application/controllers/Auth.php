<?php 
/**
 * @var Auth_model
 * @var CI_Session
 */
class Auth extends CI_Controller {
  public $Auth_model, $session;


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
  }
  public function login()
  {
    if($this->Auth_model->currentUser()) {
      redirect('idex.php/dashboard');
    }
    
    $data['pageTitle'] = 'Login';

    if(!empty($_POST)) {
      if($this->Auth_model->login($_POST)) {
        redirect('idex.php/dashboard');
      } else {
        $this->session->set_flashdata('failed', 'Username atau Password tidak valid.');
      }
    }

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/authentication/view_login');
    $this->load->view('backend/layouts/view_footer');
  }

  public function logout()
  {
    $this->Auth_model->logout();
    redirect('index.php/auth/login');
  }
}
