<?php

class Teacher_model extends CI_Model
{
  /**
   *  @var string
   */ 
  protected $table = 'tb_informasi_guru';



  // get all teacher function
  public function getAllTeachers()
  {
    return $this->db->get($this->table)->result();
  }

  // get detail teacher function
  public function getDetailTeacher($id)
  {
    $teacher = $this->db->get_where($this->table, ['ID_Guru' => $id]);
    if($teacher) {
      return $teacher->row();
    }
    return 404;
  }

  // add teacher function
  public function addTeacher($data)
  {
    $teacher = [
      'ID_Guru' => uniqid(),
      'NIPY' => htmlspecialchars($data['nipy']),
      'Nama_Guru' => htmlspecialchars($data['nama_guru']),
      'NUPTK' => htmlspecialchars($data['nuptk']),
      'Mapel_Ampu' => htmlspecialchars($data['mapel_ampu'])
    ];
    return $this->db->insert($this->table, $teacher);
  }

  // edit teacher function
  public function editTeacher($data, $id)
  {
    $teacher = $this->db->get_where($this->table, ['ID_Guru' => $id])->row();
    if($teacher) {
      $editTeacher = [
        'NIPY' => htmlspecialchars($data['nipy']),
        'Nama_Guru' => htmlspecialchars($data['nama_guru']),
        'NUPTK' => htmlspecialchars($data['nuptk']),
        'Mapel_Ampu' => htmlspecialchars($data['guru_mapel']),
      ];
      return $this->db->update($this->table, $editTeacher, ['ID_Guru' => $id]);
    } else {
      return 404;
    }
  }

  public function deleteTeacher($id)
  {
    $teacher = $this->db->get_where($this->table, ['ID_Guru' => $id])->row();
    if($teacher == null) {
      return 404;
    }
    return $this->db->delete($this->table, ['ID_Guru' => $id]);
  }
}