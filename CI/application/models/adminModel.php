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
    $query = $this->db->get_where('user', array('username' => $username, 'role' => 'Admin'));
    if ($query->num_rows()>0) {
      $this->session->set_userdata('username', $username);
      return TRUE;
    } else {
      return FALSE;
    }
  }

  //Create user Karyawan, Finance, Admin
  public function createUser1($dataCreateUser)
  {
    // code...
    $this->db->insert('user', $dataCreateUser);
  }

  public function createUser2($dataCreateKaryawan)
  {
    // code...
    $this->db->insert('karyawan', $dataCreateKaryawan);
  }

  public function createUser3($dataCreateFinance)
  {
    // code...
    $this->db->insert('finance', $dataCreateFinance);
  }


  //Delete Karyawan
  public function deleteUser($username_user)
  {
    // code...
    $d = array('is_deleted' = 1);
    $this->db->where('username_user', $username_user);
    $this->db->update('user', $d);
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
  public function readListUser()
  {
    // code...
    $q = "SELECT * FROM user WHERE is_deleted = 0";
    $query = $this->db->query($q);
    return $query->result();
  }

  public function readUser($id_user)
  {
    // code...
    $query = $this->db->get_where('user', array('username_user' => $username_user));
  }
}
?>
