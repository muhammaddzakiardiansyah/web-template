<?php

/**
 * @var CI_Session
 */
class Auth_model extends CI_Model
{
  /**
   * @var string
   */
  private $table = 'tb_users';

  const SESSION_KEY = 'user_id';


  public function login($data)
  {
    $username = $data['username'];
    $password = $data['password'];
    $user = $this->db->get_where($this->table, ['Username' => $username])->row();

    if (!$user) {
      return false;
    }
    if (!password_verify($password, $user->Password)) {
      return false;
    }

    $this->session->set_userdata(self::SESSION_KEY, $user->ID_Users);
    $this->updateLastLogin($user->ID_Users);

    return $this->session->has_userdata(self::SESSION_KEY);
  }

  public function logout()
  {
    $this->session->unset_userdata(self::SESSION_KEY);
    return !$this->session->has_userdata('user_data');
  }

  public function currentUser()
  {
    if (!$this->session->has_userdata(self::SESSION_KEY)) {
      return null;
    }
    $user_id = $this->session->userdata(self::SESSION_KEY);
    $query = $this->db->get_where($this->table, ['ID_Users' => $user_id]);
    return $query->row();
  }

  public function updateLastLogin($id_user)
  {
    date_default_timezone_set('Asia/Jakarta');
    $lastLogin = [
      'Last_Login' => date('Y-m-d H:i:s'),
    ];
    $this->db->update($this->table, $lastLogin, ['ID_Users' => $id_user]);
  }
}
