<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 function login($email,$password)
 {
  $this->db->where("emailAdd",$email);
  $this->db->where("pssword",$password);

  $query=$this->db->get("user_dtl");

  if($query->num_rows()>0)
  {
   foreach($query->result() as $rows)
   {
    //add all data to session
       $newdata = array(
      'userid'  => $rows->userId,
      'emailAdd'  => $rows->emailAdd,
      'logged_in'  => TRUE,
    );
   }
   $this->session->set_userdata($newdata);
   return true;
  }

  return false;
 }
 
 public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('user_name'),
    'email'=>$this->input->post('email_address'),
    'password'=>md5($this->input->post('password'))
  );
  $this->db->insert('user',$data);
 }
}
?>