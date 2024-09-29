<?php

class News_model extends CI_Model
{
  /**
   *  @var string
   */
  protected $table = 'tb_berita';



  // get all news function
  public function getAllNews()
  {
    return $this->db->get($this->table)->result();
  }

  // get detail news function
  public function getDetailNews($id)
  {
    $news = $this->db->get_where($this->table, ['ID_Berita' => $id]);
    if ($news) {
      return $news->row();
    }
    return 404;
  }

  // add news function
  public function addNews($data, $file)
  {
    date_default_timezone_set('Asia/Jakarta');
    $news = [
      'ID_Berita' => uniqid(),
      'Title' => htmlspecialchars($data['title']),
      'Image' => htmlspecialchars($file),
      'Berita_Post' => $data['berita_post'],
      'Upload_By' => htmlspecialchars('admin'),
      'Created_At' => $data['created_at'] ? htmlspecialchars($data['created_at']) : date('Y-m-d'),
      'Update_At' => date('Y-m-d H:i:s'),
    ];
    return $this->db->insert($this->table, $news);
  }

  // edit news function
  public function editNews($data, $file, $id)
  {
    $news = $this->db->get_where($this->table, ['ID_Berita' => $id])->row();
    date_default_timezone_set('Asia/Jakarta');
    $date = $data['created_at'];
    if ($news) {
      $editNews = [
        'Title' => htmlspecialchars($data['title']),
        'Image' => htmlspecialchars($file),
        'Berita_Post' => $data['berita_post'],
        'Upload_By' => htmlspecialchars('admin'),
        'Created_At' => $data['created_at'] ? htmlspecialchars($data['created_at']) : date('Y-m-d'),
        'Update_At' => date('Y-m-d H:i:s'),
      ];
      return $this->db->update($this->table, $editNews, ['ID_Berita' => $id]);
    } else {
      return 404;
    }
  }

  // delete news function
  public function deleteNews($id)
  {
    $news = $this->db->get_where($this->table, ['ID_Berita' => $id])->row();
    if ($news == null) {
      return 404;
    }
    if(unlink('./uploads/'.$news->Image)) {
      return $this->db->delete($this->table, ['ID_Berita' => $id]);
    }
  }
}
