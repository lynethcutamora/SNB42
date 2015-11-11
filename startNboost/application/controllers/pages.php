<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pages extends CI_Controller {

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
	public function view($page='index')
	{
		if(!file_exists('application/views/pages/'.$page.'.php')&&!file_exists('application/views/pages/'.$page)){
			show_404();
		}
	
		else if($page=='index'||$page==''||$page=='home.php'){
			$this->load->view('pages/nav');
		    $this->load->view('pages/index');
		}
		else if($page=='membersarea'||$page=='membersarea.php'){
			$this->load->view('pages/nav');
		    $this->load->view('pages/membersarea');
		}
		
	

	}
	
	
}
