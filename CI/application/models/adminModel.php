<?php
/**
 *
 */
class adminModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  //Check Admin
  public function validateAdmin($username, $password)
  {
    $query = $this->db->get_where('admin', array('username' => $username));
    if ($query->num_rows()>0) {
      $this->session->set_userdata('username', $username);
      return TRUE;
    } else {
      return FALSE;
    }
  }

  //Create Karyawan
  public function createKaryawan($dataCreateKaryawan)
  {
    // code...
    $this->db->insert('user', $dataCreateKaryawan);
  }

  //Delete Karyawan
  public function deleteKaryawan($username_user)
  {
    // code...
    $this->db->delete('user', array('username_user' => $username_user));
  }

  //Update Karyawan
  public function updateKaryawan($username_user, $password_user, $role_user)
  {
    // code...
    $data = array(
              'password_user' => $password_user,
              'role_user' => $role_user
    );
    $this->db->where('username_user', $username_user);
    $this->db->update('user', $data);
  }

  //Read List Karyawan
  public function readListKaryawan()
  {
    // code...
    $query = $this->db->get('karyawan');
    return $query->result();
  }

  public function readKaryawan($username_user)
  {
    // code...
    $query = $this->db->get_where('user', array('username_user' => $username_user));
  }
}
?>
