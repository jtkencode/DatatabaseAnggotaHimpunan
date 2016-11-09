<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('Anggota_Model');
		$this->load->model('Kontak_model');
		$this->load->model('Riwayat_Pendidikan_model');
		$this->load->model('Riwayat_Org_model');
		$this->load->model('Tingkat_Prestasi_model');
		$this->load->model('Riwayat_Prestasi_model');
		$this->load->model('Riwayat_Kepanitiaan_model');
		$this->load->model('Riwayat_Pelatihan_model');
		$this->load->model('Riwayat_PKM_model');
	}

	public function index($nim)
	{
		redirect('profile/view');
	}

	public function view($nim = null)
	{
		if ($nim == null){
			$this->load->view('errors');
		}

		else {
			$data['anggota'] = $this->Anggota_Model->get_id($nim);
			$data['prodi']['D3-TI'] = "DIII-Teknik Informatika";
			$data['prodi']['D4-TI'] = "Sarjana Terapan Teknik Informatika";

			$data['kontak'] = $this->Kontak_model->get_id($nim);
			$ui['navtab']['page'] = 'overview';
			
			$this->load->view('anggota/header');
			$this->load->view('anggota/profile',$data);
			$this->load->view('anggota/nav_riwayat',$ui['navtab']);
			$this->load->view('anggota/overview');
			$this->load->view('anggota/footer');
		}

		
	}

}
