<?php
/**
 * @var Teacher_model
 * @var Auth_model
 * @var CI_Session
 */ 

class Teacher extends CI_Controller
{

  public $session, $Teacher_model, $Auth_model;


  // call model function
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['Teacher_model', 'Auth_model']);
    if(!$this->Auth_model->currentUser()) {
      redirect('index.php/auth/login');
    }
  }

  // teacher dashboard function
  public function index()
  {
    $data['pageTitle'] = 'Data Guru';
    $data['deleteSecretKey'] = uniqid();
    $data['teachers'] = $this->Teacher_model->getAllTeachers();
    $data['userLogin'] = $this->Auth_model->currentUser();

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/teacher/view_data_teacher', $data);
    $this->load->view('backend/layouts/view_footer');
  }

  // get detail teacher function
  public function get_detail_teacher($id)
  {
    $data['pageTitle'] = 'Detail Guru';
    $data['teacher'] = $this->Teacher_model->getDetailTeacher($id);
    $data['userLogin'] = $this->Auth_model->currentUser();

    // condition if data not found
    if($data['teacher'] == null) {
      $this->session->set_flashdata('not-found', 'Data guru tidak ditemukan.');
      redirect('index.php/teacher');
    }

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/teacher/view_detail_teacher', $data);
    $this->load->view('backend/layouts/view_footer');
  }

  // add teacher function
  public function add_teacher()
  {
    $data['pageTitle'] = 'Tambah data guru';
    $data['userLogin'] = $this->Auth_model->currentUser();

    if(!empty($_POST)) {
      if($this->Teacher_model->addTeacher($_POST) >= 0) {
        $this->session->set_flashdata('success', 'Berhasil menambah data guru!');
        redirect('index.php/teacher');
      }
      $this->session->set_flashdata('failed', 'Gagal menambah data guru!');
      redirect('index.php/teacher');
    }

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/teacher/view_add_teacher');
    $this->load->view('backend/layouts/view_footer');
  }

  // edit teacher function
  public function edit_teacher($id)
  {
    $data['pageTitle'] = 'Edit data guru';
    $data['teacher'] = $this->Teacher_model->getDetailTeacher($id);
    $data['userLogin'] = $this->Auth_model->currentUser();

     // condition if data not found
     if($data['teacher'] == null) {
      $this->session->set_flashdata('not-found', 'Data guru tidak ditemukan.');
      redirect('index.php/teacher');
    }

    if(!empty($_POST)) {
      if($this->Teacher_model->editTeacher($_POST, $id) >= 0) {
        $this->session->set_flashdata('success', 'Berhasil mengubah data guru!');
        redirect('index.php/teacher');
      } elseif($this->Teacher_model->editTeacher($_POST, $id) == 404) {
        $this->session->set_flashdata('not-found', 'Data guru tidak ditemukan!');
        redirect('index.php/teacher');
      } else {
        $this->session->set_flashdata('failed', 'Gagal mengubah data guru!');
        redirect('index.php/teacher');
      }
    }

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/teacher/view_edit_teacher', $data);
    $this->load->view('backend/layouts/view_footer');
  }

  // delete teacher function
  public function delete_teacher($id = 404)
  {
    if($id !== 404) {
      if($this->Teacher_model->deleteTeacher($id) == 1) {
        $this->session->set_flashdata('success', 'Berhasil menghapus data guru!');
        redirect('index.php/teacher');
      } else {
        $this->session->set_flashdata('failed', 'Gagal menghapus data guru!');
        redirect('index.php/teacher');
      }
    } else {
        $this->session->set_flashdata('not-found', 'Data guru tidak ditemukan.');
        redirect('index.php/teacher');
    }
  }
}
