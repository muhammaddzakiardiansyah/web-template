<?php

class School_model extends CI_Model {
  /**
   * @var string
   */
   protected $table = 'tb_informasi_sekolah';


   public function getInformationSchool() 
   {
    return $this->db->get($this->table)->row();
   }

   public function editInformationSchool($data, $file)
   {
    $informationSchool = [
      'Nama_Sekolah' => htmlspecialchars($data['school_name']),
      'Logo_Sekolah' => htmlspecialchars($file),
      'Visi_Sekolah' => $data['school_vision'],
      'Misi_Sekolah' => $data['school_mision'],
      'Alamat' => htmlspecialchars($data['school_address']),
      'Info_Kontak' => htmlspecialchars($data['contact_info'])
    ];

    return $this->db->update($this->table, $informationSchool);
   }
}