<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qasidah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('QasidahModel');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['daftar_qasidah'] = $this->QasidahModel->getAllQasidah();
		$this->load->view('front/data_qasidah', $data);
	}

}

/* End of file Qasidah.php */
/* Location: ./application/controllers/front/Qasidah.php */ ?>