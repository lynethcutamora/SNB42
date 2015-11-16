<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	 {
	  parent::__construct();
	  $this->load->model('user_model');
	  $this->load->library(array('form_validation','session'));
 	  $this->load->helper(array('url','html','form'));
	 }
	public function index()
	{
		 if(($this->session->userdata('userid')!=""))
		  {
		   $this->welcome();
		  }
		  else{
		   $this->home();
		  }
	}
	public function welcome()
	{
		  $data['title']= 'Welcome';
		  $this->load->view('pages/nav',$data);
		  $this->load->view('pages/membersarea');
		  $this->load->view('pages/footer');
	}
	public function login()
	{
	  $email=$this->input->post('emailAdd');
	  $password=$this->input->post('pssWord');

 	  $this->form_validation->set_rules("emailAdd", "E-mail", "trim|required");
      $this->form_validation->set_rules("pssWord", "password", "trim|required");
       if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->index();
          }
        else{
	  $result=$this->user_model->login($email,$password);
	  if($result) redirect("welcome");
	  else        redirect("index.php");
	  }
	}
	 public function logout()
	 {
	  $newdata = array(
	  'userid'   =>'',
	  'emailAdd'     => '',
	  'logged_in' => FALSE,
	  );
	  $this->session->unset_userdata($newdata );
	  $this->session->sess_destroy();
	 	$this->home();
	 }

	 public function home()
	 {
			$data['title']= 'Start&Boost';
		   $this->load->view('pages/index',$data);
		   $this->load->view("pages/modals");
		   $this->load->view('pages/footer');
	 }
}
