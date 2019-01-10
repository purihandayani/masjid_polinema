<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('InventarisModel');
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
		$data['daftar_inventaris'] = $this->InventarisModel->getAllInventaris();
		$this->load->view('back/data_inventaris', $data);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama Benda', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('jumlah', 'Jumlah Barang', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('kondisi', 'Kondisi Barang', 'trim|required'); //Validation Input
		//$this->form_validation->set_rules('keterangan', 'Keterangan Tambahan', 'trim|required'); //Validation Input


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/tambah_inventaris');
		}else{
			$this->InventarisModel->add();
			redirect('back/Inventaris','refresh');
		}
	}

	//Update one item
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Benda', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('jumlah', 'Jumlah Barang', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('kondisi', 'Kondisi Barang', 'trim|required'); //Validation Input
		//$this->form_validation->set_rules('keterangan', 'Keterangan Tambahan', 'trim|required'); //Validation Input

		$data['selectedInventaris'] = $this->InventarisModel->getSelectedInventaris($id);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/edit_inventaris',$data);
		}else{
			$this->InventarisModel->update($id);
			redirect('back/Inventaris','refresh');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->InventarisModel->delete($id);
		redirect('back/Inventaris','refresh');
	}
}

/* End of file Inventaris.php */
/* Location: ./application/controllers/back/Inventaris.php */
 ?>