<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');			
		$this->load->model('InventarisModel');
	}
	public function index()
	{
		$data['daftar_inventaris'] = $this->InventarisModel->getAllInventaris();
		$this->load->view('front/data_inventaris', $data);
	}

}

/* End of file Inventaris.php */
/* Location: ./application/controllers/front/Inventaris.php */ ?>