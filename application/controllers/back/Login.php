<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url'); 
		
	}
	public function index() {
	 if ($this->session->userdata('userlogin')) {
		$this->admin();
		}else {
			$this->load->view('back/login');
		}
	}

	public function login() {

	 
	 $this->form_validation->set_rules('username','Username','trim|required');
	 $this->form_validation->set_rules('password','Password','trim|required');
	 if($this->form_validation->run()==false){
	  $this->index();
	 }else if($this->input->post('username') == 'admin' && $this->input->post ('password') == 'polinema@123'){
	  $user_session=array(
	   'Username'      => $this->input->post('username'),
	   'Password'      => $this->input->post('password'),
	   'is_logged_in'  => 1
	  );
	  $this->session->set_userdata('userlogin',$user_session);
	  $this->admin();
	 }elseif ($this->input->post('username') != 'admin') {
	 	echo "<h1 align=center>  </h1>";
	 	$this->load->view('back/login');
	 }elseif ($this->input->post('password') != 'polinema') {
	 	echo "<h1 align=center> Password Salah </h1>";
	 	$this->load->view('back/login');
	 }

	}

	public function admin() {
	 redirect('back/Agenda','refresh');

	}
	public function Logout()
	{
		$this->session->unset_userdata('userlogin');
		$this->session->sess_destroy();

		redirect('front/Home','refresh');
	}
}
/* End of file Login.php */
/* Location: ./application/controllers/back/Login.php */ ?>