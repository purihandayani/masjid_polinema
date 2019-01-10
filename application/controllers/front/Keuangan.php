<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('KeuanganModel');
		$this->load->helper('form');
		$this->load->library('form_validation');

	}

	// List all your items
	public function index()
	{	
		$data['daftar_anggaran'] = $this->KeuanganModel->getAllAnggaran();
		$data['saldo'] = $this->KeuanganModel->hitungSaldo();
		//print_r($data['saldo']);
		//print_r($data['saldo']);
		$this->load->view('front/data_anggaran', $data);
	}

}

/* End of file Keuangan.php */
/* Location: ./application/controllers/front/Keuangan.php */ ?>