<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod extends CI_Model {

	public function GetTable($tabel)
	{
		$data=$this->db->get($tabel);
		return $data->result_array();
    }
    public function InsertData($tabel, $data) {
        $res = $this->db->insert($tabel, $data);
        return $res;
    }
    public  function getByID($tabel,$pk,$id){
        $this->db->where($pk,$id);
        return $this->db->get($tabel);
    }
    public function UpdateData($tabel, $data, $pk, $id) {
        $this->db->where($pk,$id);
        $res = $this->db->update($tabel,$data);
        return $res;
    }
    public function DeleteData($tabel, $pk, $id) {
        $this->db->where($pk,$id);
        $res = $this->db->delete($tabel);
        return $res;
    }


    public function cariDataPerusahaan($keyword)
 {
  $this->db->like('id', $keyword);
  $query = $this->db->get('data_usaha');
  return $query->result();
 }


 public function getAllPerusahaan()
 {
  return $this->db->get('data_usaha')->result_array();
 }





}
