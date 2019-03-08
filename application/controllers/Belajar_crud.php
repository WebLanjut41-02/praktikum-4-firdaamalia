<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_crud extends CI_Controller {
	public function index(){
        $data= $this->mod->GetTable('data_usaha');
        $this->load->view('templates/header');
		$this->load->view('viewcrud', array('data'=>$data));
		$this->load->view('templates/footer');

	}
	public function insert()
	{
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$nohp = $this->input->post('nohp');
			$namaperusahaan = $this->input->post('namaperusahaan');
			$email = $this->input->post('email');
			$kota = $this->input->post('kota');

			$data = array('id'=>$id, 'Nama'=>$nama, 'nohp'=>$nohp,'namaperusahaan'=>$namaperusahaan,'email'=>$email,'kota'=>$kota); //data yang akan di insert

			$this->mod->InsertData('data_usaha', $data);
			
			redirect('Belajar_crud'); //
		}else{
			$this->load->view('insertcrud'); //menampilkan views insertcrud
		}
	}

	public function delete(){
        $id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
        $this->mod->DeleteData('data_usaha','id',$id); //menghapus data
        redirect('Belajar_crud'); //mengalihkan ke tampbali
    }

    	public function update(){
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$nohp = $this->input->post('nohp');
			$namaperusahaan = $this->input->post('namaperusahaan');
			$email = $this->input->post('email');
			$kota = $this->input->post('kota');

			$data = array('id'=>$id, 'Nama'=>$nama, 'nohp'=>$nohp,'namaperusahaan'=>$namaperusahaan,'email'=>$email,'kota'=>$kota); //data yang akan di update

			$this->mod->UpdateData('data_usaha', $data,'id',$id); //mengaupdate data melalui fungsi insertdata pad models mod.php
			redirect('Belajar_crud'); //mengalihkan ke tampbali
		}else{
			$id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
			$data = $this->mod->getByID('data_usaha','id',$id)->row_array(); //menselect data yg akan di update
		
			$this->load->view('updatecrud',array('r'=>$data)); //menampilkan views updatecrud
		}
	}

    public function search()
    {
    	$keyword = $this->input->post('keyword');
    	$data['result'] = $this->mod->cariDataPerusahaan($keyword);
    	$this->load->view('cari', $data);
    }



}
