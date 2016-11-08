<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_Pelatihan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		
		if(empty($this->session->userdata('user'))) {
            redirect('login');
        }
        $this->load->helper('form');
		$this->load->model('Anggota_Model');
		$this->load->model('Kontak_model');
		$this->load->model('Riwayat_Pelatihan_model');

	}

	public function index()
	{
		$nim = $this->session->userdata('user');
		$data['anggota'] = $this->Anggota_Model->get_id($nim);
		$data['prodi']['D3-TI'] = "DIII-Teknik Informatika";
		$data['prodi']['D4-TI'] = "Sarjana Terapan Teknik Informatika";
		$data['kontak'] = $this->Kontak_model->get_id($nim);
		$data['riwayat_pelatihan'] = $this->Riwayat_Pelatihan_model->get_nim($nim);
		$ui['navtab']['page'] = 'pelatihan';
		
		$this->load->view('anggota/header');
		$this->load->view('anggota/profile',$data);
		$this->load->view('anggota/nav_riwayat',$ui['navtab']);
		$this->load->view('anggota/riwayat/pelatihan/content',$data);
		$this->load->view('anggota/footer');
	}
	
	public function add()
	{ 
		$data['nim'] = $this->session->userdata('user');
		
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$ui['page'] = 'Tambah Riwayat Pelatihan';
			$this->load->view('anggota/crud_header',$ui);
			$this->load->view('anggota/riwayat/pelatihan/add_riwayat_pelatihan',$data);
		} else {
			$insert = $this->Riwayat_Pelatihan_model->add_riwayat_pelatihan($data['nim']);
			if ($insert){
				  redirect('anggota/success');
			} else echo "Insert Gagal";
		}	
	}

	public function get($id = null)
	{
		if ($id != null) {
			$data = $this->Riwayat_Pelatihan_model->get_id($id);
		} else {
			$nim = $this->session->userdata('user');
			$data = $this->Riwayat_Pelatihan_model->get_nim($nim);
		}
		
		return $data;
	}

	public function update($id)
	{ 
		$data['nim'] = $this->session->userdata('user');
		
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$data['riwayat_pelatihan']= $this->get($id);
			$ui['page'] = 'Ubah Riwayat Pelatihan';
			$this->load->view('anggota/crud_header',$ui);
			$this->load->view('anggota/riwayat/pelatihan/update_riwayat_pelatihan',$data);
		} else {
			$update = $this->Riwayat_Pelatihan_model->update_riwayat_pelatihan($id);
			if ($update){
				  redirect('anggota/success');
			} else echo "Update Gagal";
		}	
	}
	
	public function delete($id)
	{ 
		$data['nim'] = $this->session->userdata('user');
		
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$data['riwayat']= (array) $this->get($id);
			$ui['page'] = 'Hapus Riwayat Pelatihan';
			$data['table']['header'] = ["Nama Pelatihan","Nama Penyelenggara","Tahun Pelatihan","Pelatihan Kemahasiswaan"];
			$data['attribute'] = ["NAMA_PELATIHAN","NAMA_PENYELENGGARA_PELATIHAN","TAHUN_PELATIHAN","PELATIHAN_KEMAHASISWAAN"];
			$this->load->view('anggota/crud_header',$ui);
			$this->load->view('anggota/hapus_riwayat',$data);
		} else {
			$delete = $this->Riwayat_Pelatihan_model->delete_riwayat_pelatihan($id);
			if ($delete){
				 redirect('anggota/success');
			} else echo "Delete Gagal";
		}	
	}

}
