<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('KomentarModel');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	// List all your items
	public function index()
	{
		
		$data['daftar_komentar'] = $this->KomentarModel->getAllKomentar();
		$this->load->view('back/data_komentar', $data);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('komentator', 'Nama ', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('isi', 'Isi Komentar', 'trim|required'); //Validation Input
		


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('front/data_agenda');
		}else {
			$this->KomentarModel->add();
			redirect('front/Agenda','refresh');
		}		
	}

	//Update one item
	public function update($id)
	{
		$data['selectedKomentar'] = $this->KomentarModel->getSelectedKomentar($id);
		$this->form_validation->set_rules('komentator', 'Nama ', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('isi', 'Isi Komentar', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('balasan', 'Balasan Komentar', 'trim|required'); //Validation Input
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/edit_komentar',$data);
		}else {
			$this->KomentarModel->update($id);
			redirect('back/Komentar','refresh');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->KomentarModel->delete($id);
		redirect('back/Komentar','refresh');
	}
}

/* End of file Komentar.php */
/* Location: ./application/controllers/back/Komentar.php */
 ?>