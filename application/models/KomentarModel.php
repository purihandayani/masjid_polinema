<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KomentarModel extends CI_Model {

	public function getAllKomentar()
	{
		$this->db->select('*');
		$this->db->from('komentar');
		
		$query = $this->db->get();
		return $query->result();
	}
	public function getAllKomentarYa()
	{
		$this->db->select('*');
		$this->db->from('komentar');
		$this->db->where('izin', 'ya');
		$query = $this->db->get();
		return $query->result();
	}

	// Add a new item
	public function add()
	{
		$array = array(
			'isi_komentar'	=> $this->input->post('isi'),
			'oleh'	=> $this->input->post('komentator'),
			'izin'			=> "tidak",
			'balasan'		=> "-"
		);
		$this->db->insert('komentar', $array);
	}

	//Update one item
	public function getSelectedKomentar($id)
	{
		$this->db->where('id_komentar', $id);
		$result = $this->db->get('komentar');
		return $result->result();
	}

	//Delete one item
	public function delete($id)
	{
		$this->db->where('id_komentar', $id);
		$this->db->delete('komentar');
	}
	public function update($id){
		$array = array(
			'isi_komentar'	=> $this->input->post('isi'),
			'oleh'	=> $this->input->post('komentator'),
			'izin'			=> 'ya',
			'balasan'		=> $this->input->post('balasan')
		);
		$this->db->where('id_komentar', $id);
		$this->db->update('komentar', $array);
	}
	

}

/* End of file KomentarModel.php */
/* Location: ./application/models/KomentarModel.php */ ?>