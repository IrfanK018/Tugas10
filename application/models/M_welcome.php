<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_welcome extends CI_Model{

	public function create($id,$filename){

		$data = array(
			'id'=>$id,
			'namaProduk'=>$this->input->post('namaProduk', TRUE),
			'keterangan'=>$this->input->post('keterangan',TRUE),
			'harga'=>$this->input->post('harga',TRUE),
			'jumlah'=>$this->input->post('jumlah',TRUE),
			'filename'=>$filename
			
		);
		$this->db->insert('produk',$data);
	}
	public function read($id=FALSE){

		if($id==FALSE){
			return $this->db->get("produk")->result_array();
		}
		else{
			$query = $this->db->get_where("produk",array('id'=>$id));
			return $query->row();
		}
	}
	public function update($id){

		$data = array(
			
			'namaProduk'=>$this->input->post('namaProduk', TRUE),
			'keterangan'=>$this->input->post('keterangan',TRUE),
			'harga'=>$this->input->post('harga',TRUE),
			'jumlah'=>$this->input->post('jumlah',TRUE)

			
		);
		$this->db->where('id', $id);
		$this->db->update('produk', $data);
	}
	public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('produk');
    }
    public function deleteALL(){
        $this->db->empty_table('produk');
    }
}