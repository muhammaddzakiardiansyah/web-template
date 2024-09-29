<?php
/**
 * @var Teacher_model
 * @var News_model
 * @var School_model
 * @var Auth_model
 * @var CI_Upload
 * @var CI_Session
 */

class Dashboard extends CI_Controller
{

  public $Teacher_model, $News_model, $School_model, $Auth_model, $upload, $session;

  public function __construct()
  {
    parent::__construct();
    $this->load->model(['Teacher_model', 'News_model', 'School_model', 'Auth_model']);
    if(!$this->Auth_model->currentUser()) {
      redirect('index.php/auth/login');
    }
  }
  public function index()
  {
    $data['pageTitle'] = 'Dashboard';
    $data['total_teacher'] = $this->Teacher_model->getAllTeachers();
    $data['total_news'] = $this->News_model->getAllNews();
    $data['information_school'] = $this->School_model->getInformationSchool();
    $data['userLogin'] = $this->Auth_model->currentUser();

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/dashboard/view_dashboard', $data);
    $this->load->view('backend/layouts/view_footer');
  }

  public function edit_information_school() {
    $data['pageTitle'] = 'Edit Informasi sekolah';
    $data['information_school'] = $this->School_model->getInformationSchool();
    $data['userLogin'] = $this->Auth_model->currentUser();

    if(!empty($_POST)) {
      $config['upload_path'] = './uploads/';
      $config['file_name'] = uniqid();
      $config['allowed_types'] = 'jpg|png|jpeg|svg|gif';
      $config['max_size'] = 1024; // 1 mb

      $this->load->library('upload', $config);

      if($this->upload->do_upload('school_logo')) {
        unlink('./uploads/'.$data['information_school']->Logo_Sekolah);
        $uploadFile = $this->upload->data();

        if ($this->School_model->editInformationSchool($_POST, $uploadFile['file_name']) >= 0) {
          $this->session->set_flashdata('success', 'Berhasil mengubah informasi sekolah!');
          redirect('index.php/dashboard');
        } elseif ($this->School_model->editInformationSchool($_POST, $uploadFile['file_name']) == 404) {
          $this->session->set_flashdata('not-found', 'Informasi sekolah tidak ditemukan!');
          redirect('index.php/dashboard');
        } else {
          $this->session->set_flashdata('failed', 'Gagal mengubah informasi sekolah!');
          redirect('index.php/dashboard');
        }
      } else {
        if ($this->School_model->editInformationSchool($_POST, $_POST['school_logo']) >= 0) {
          $this->session->set_flashdata('success', 'Berhasil mengubah informasi sekolah!');
          redirect('index.php/dashboard');
        } elseif ($this->School_model->editInformationSchool($_POST, $_POST['school_logo']) == 404) {
          $this->session->set_flashdata('not-found', 'Informasi sekolah tidak ditemukan!');
          redirect('index.php/dashboard');
        } else {
          $this->session->set_flashdata('failed', 'Gagal mengubah informasi sekolah!');
          redirect('index.php/dashboard');
        }
      }
    }
    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/dashboard/view_edit_information_school', $data);
    $this->load->view('backend/layouts/view_footer');
  }
}
