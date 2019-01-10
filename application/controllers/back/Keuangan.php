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
		if($this->session->userdata('userlogin')){
     		//$this->load->view('back/home');  		
    	}else{
    		redirect('back/Login','refresh');
    	}

	}

	// List all your items
	public function index()
	{	
		$data['daftar_anggaran'] = $this->KeuanganModel->getAllAnggaran();
		$data['saldo'] = $this->KeuanganModel->hitungSaldo();
		
		$this->load->view('back/data_anggaran', $data);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('nama_masjid', 'nama_masjid', 'trim|required');
	      $this->form_validation->set_rules('jenis_kotak', 'jenis_kotak', 'trim|required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('pemasukan', 'Pemasukan', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('pengeluaran', 'Pengeluaran', 'trim|required'); //Validation Input

		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/tambah_anggaran');
		}else {
			$this->KeuanganModel->add();
			redirect('back/Keuangan','refresh');
		}
	}

	//Update one item
	public function update($id)
	{
		$this->form_validation->set_rules('nama_masjid', 'nama_masjid', 'trim|required');
	      $this->form_validation->set_rules('jenis_kotak', 'jenis_kotak', 'trim|required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('pemasukan', 'Pemasukan', 'trim|required'); //Validation Input
		$this->form_validation->set_rules('pengeluaran', 'Pengeluaran', 'trim|required'); //Validation Inputnput

		$data['selectedAnggaran'] = $this->KeuanganModel->getSelectedAnggaran($id);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/edit_anggaran',$data);
		}else {
			$this->KeuanganModel->update($id);
			redirect('back/Keuangan','refresh');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->KeuanganModel->delete($id);
		redirect('back/Keuangan','refresh');
	}
	
}

/* End of file Keuangan.php */
/* Location: ./application/controllers/back/Keuangan.php */
 ?>