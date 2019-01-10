<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qasidah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('QasidahModel');
		$this->load->helper('form');
		$this->load->library('form_validation');
		if($this->session->userdata('userlogin')){
     		//$this->load->view('back/home');  		
    	}else{
    		redirect('back/Login','refresh');
    	}
	}

	// List all your items
	public function index()
	{
		$data['daftar_qasidah'] = $this->QasidahModel->getAllQasidah();
		$this->load->view('back/data_qasidah', $data);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('judul', 'Judul qasidah', 'trim|required'); //Validation Input

		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/tambah_qasidah');
		}else {
			$this->QasidahModel->add();
			redirect('back/Qasidah','refresh');
		}
	}

	//Update one item
	public function update($id)
	{
		$this->form_validation->set_rules('judul', 'Judul qasidah', 'trim|required'); //Validation Input
		$data['selectedQasidah'] = $this->QasidahModel->getSelectedQasidah($id);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/edit_qasidah',$data);
		}else {
			$this->QasidahModel->update($id);
			redirect('back/Qasidah','refresh');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->QasidahModel->delete($id);
		redirect('back/Qasidah','refresh');
	}
}

/* End of file Qasidah.php */
/* Location: ./application/controllers/back/Qasidah.php */
 ?>