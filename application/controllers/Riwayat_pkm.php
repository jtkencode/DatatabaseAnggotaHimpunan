<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_PKM extends My_Controller {

	public function __construct()
	{
		parent::__construct();		
		
		$this->load->model('Anggota_Model');
		$this->load->model('Kontak_model');
		$this->load->model('Riwayat_PKM_model');
	}

	public function index()
	{
		redirect('riwayat_pkm/view');
	}

	public function view($nim = null)
	{
		if ($nim == null){
			$this->load->view('errors');
		}

		else {
			$guest_id = $this->session->userdata('guest_id');
			$data['anggota'] = $this->Anggota_Model->get_nim($nim);
			$id = $data['anggota']->id_anggota;
			$data['kontak'] = $this->Kontak_model->get_id($id);
			$data['riwayat_pkm'] = $this->Riwayat_PKM_model->get_id($id);
			$ui['navtab']['page'] = 'pkm';
			$ui['navtab']['nim'] = $nim;
			
			$this->load->view('guest/header');
			if ($guest_id == "anggota"){
				$id = $this->session->userdata('user_id');
				$data['anggota_logged_in'] = $this->Anggota_Model->get_id($id);
				$ui['nama_anggota'] = $data['anggota_logged_in']->nama_lengkap;
				$this->load->view('guest/body_anggota',$ui);
			} else if ($guest_id == "guest"){
				$this->load->view('guest/body_guest',$ui);
			} else if ($guest_id == "admin"){
				$this->load->view('guest/body_admin');
			}
			$this->load->view('guest/profile',$data);
			$this->load->view('guest/nav_riwayat',$ui['navtab']);
			$this->load->view('guest/riwayat/riwayat_pkm',$data);
			$this->load->view('guest/footer');
		}
		
	}
}
