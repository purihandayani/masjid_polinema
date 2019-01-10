<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');			
		$this->load->model('AgendaModel');
		if($this->session->userdata('userlogin')){
     		//$this->load->view('back/home');  		
    	}else{
    		redirect('back/Login','refresh');
    	}
	}

	// List all your items
	public function index()
	{
		$this->load->view('back/home');	
	}
	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('nama_agenda', 'Nama Agenda', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('jenis_agenda', 'Jenis Agenda', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('waktu', 'Tahun Bulan Tanggal', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('pelaksana', 'Pelaksana Agenda', 'trim|required'); //Validation Input


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/tambah_agenda');
		}else {
			$this->AgendaModel->add();
			redirect('back/agenda/Home','refresh');
		}		
	}

	//Update one item
	public function update($id)
	{
		$this->form_validation->set_rules('nama_agenda', 'Nama Agenda', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('jenis_agenda', 'Jenis Agenda', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('waktu', 'Tahun Bulan Tanggal', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('pelaksana', 'Pelaksana Agenda', 'trim|required'); //Validation Input

		$data['selectedAgenda'] = $this->AgendaModel->getSelectedAgenda($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/edit_agenda',$data);
		}else {
			$this->AgendaModel->update($id);
			redirect('back/agenda/Home','refresh');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->AgendaModel->delete($id);
		redirect('back/agenda/Home','refresh');
	}
	public function Home()
	{
		$data['daftar_agenda'] = $this->AgendaModel->getAllAgenda();
		$this->load->view('back/data_agenda', $data);
	}
}

/* End of file Agenda.php */
/* Location: ./application/controllers/back/Agenda.php */
 ?>