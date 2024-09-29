<?php
/**
 * @var News_model
 * @var Auth_model
 * @var CI_Session
 */

class News extends CI_Controller
{

  public $session, $upload, $News_model, $Auth_model;


  // call model function
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['News_model', 'Auth_model']);
    if(!$this->Auth_model->currentUser()) {
      redirect('index.php/auth/login');
    }
  }

  // news dashboard function
  public function index()
  {
    $data['pageTitle'] = 'Berita';
    $data['news'] = $this->News_model->getAllNews();
    $data['userLogin'] = $this->Auth_model->currentUser();

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/news/view_data_news', $data);
    $this->load->view('backend/layouts/view_footer');
  }

  // get detail news function
  public function get_detail_news($id)
  {
    $data['pageTitle'] = 'Detail Berita';
    $data['news'] = $this->News_model->getDetailNews($id);
    $data['userLogin'] = $this->Auth_model->currentUser();

    // condition if data not found
    if ($data['news'] == null) {
      $this->session->set_flashdata('not-found', 'Berita tidak ditemukan.');
      redirect('index.php/news');
    }

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/news/view_detail_news', $data);
    $this->load->view('backend/layouts/view_footer');
  }

  // add news function
  public function add_news()
  {
    $data['pageTitle'] = 'Buat Berita';
    $data['userLogin'] = $this->Auth_model->currentUser();

    if (!empty($_POST)) {
      // upload file
      $fileName = uniqid();
      $config['upload_path'] = './uploads/';
      $config['file_name'] = $fileName;
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = 1024; // 1 MB

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('image')) {
        $this->session->set_flashdata('image-error', $this->upload->display_errors('<p id="image-error">', '</p>'));
      } else {
        $uploadFile = $this->upload->data();
        if ($this->News_model->addNews($_POST, $uploadFile['file_name']) >= 0) {
          $this->session->set_flashdata('success', 'Berhasil menambah berita baru!');
          redirect('index.php/news');
        }
        $this->session->set_flashdata('failed', 'Gagal menambah berita baru!');
        redirect('index.php/news');
      }
    }

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/news/view_add_news');
    $this->load->view('backend/layouts/view_footer');
  }

  // edit news function
  public function edit_news($id)
  {
    $data['pageTitle'] = 'Edit Berita';
    $data['news'] = $this->News_model->getDetailNews($id);
    $data['userLogin'] = $this->Auth_model->currentUser();

    // condition if data not found
    if ($data['news'] == null) {
      $this->session->set_flashdata('not-found', 'Berita tidak ditemukan.');
      redirect('index.php/news');
    }

    if (!empty($_POST)) {
      // upload file
      $fileName = uniqid();
      $config['upload_path'] = './uploads/';
      $config['file_name'] = $fileName;
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = 1024; // 1 MB

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        // delete old file
        unlink('./uploads/' . $data['news']->Image);
        // add new file
        $uploadFile = $this->upload->data();
        if ($this->News_model->editNews($_POST, $uploadFile['file_name'], $id) >= 0) {
          $this->session->set_flashdata('success', 'Berhasil mengubah berita!');
          redirect('index.php/news');
        } elseif ($this->News_model->editNews($_POST, $uploadFile['file_name'], $id) == 404) {
          $this->session->set_flashdata('not-found', 'Berita tidak ditemukan!');
          redirect('index.php/news');
        } else {
          $this->session->set_flashdata('failed', 'Gagal mengubah berita!');
          redirect('index.php/news');
        }
      } else {
        if ($this->News_model->editNews($_POST, $_POST['image'], $id) >= 0) {
          $this->session->set_flashdata('success', 'Berhasil mengubah berita!');
          redirect('index.php/news');
        } elseif ($this->News_model->editNews($_POST, $_POST['image'], $id) == 404) {
          $this->session->set_flashdata('not-found', 'Berita tidak ditemukan!');
          redirect('index.php/news');
        } else {
          $this->session->set_flashdata('failed', 'Gagal mengubah berita!');
          redirect('index.php/news');
        }
      }
    }

    $this->load->view('backend/layouts/view_header', $data);
    $this->load->view('backend/news/view_edit_news', $data);
    $this->load->view('backend/layouts/view_footer');
  }

  // delete news function
  public function delete_news($id = 404)
  {
    if ($id !== 404) {
      if($this->News_model->deleteNews($id) == 1) {
        $this->session->set_flashdata('success', 'Berhasil menghapus berita!');
        redirect('index.php/news');
      } else {
        $this->session->set_flashdata('failed', 'Gagal menghapus berita!');
        redirect('index.php/news');
      }
    } else {
      $this->session->set_flashdata('not-found', 'Berita tidak ditemukan.');
      redirect('index.php/news');
    }
  }
}
