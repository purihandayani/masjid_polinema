<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');			
		$this->load->model('AgendaModel');
		$this->load->model('KomentarModel');
	}
	public function index()
	{
		$data['daftar_agenda'] = $this->AgendaModel->getAllAgenda();
		$data['daftar_komentar'] = $this->KomentarModel->getAllKomentarYa();
		$this->load->view('front/data_agenda', $data);	
	}

}

/* End of file Agenda.php */
/* Location: ./application/controllers/front/Agenda.php */ ?>