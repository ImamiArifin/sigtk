<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {


	public function index($id, $subid)
	{
		
	}

	public function data($id = null, $subid = null)
	{
		if($id != null AND $subid == null){
			$this->load->view('usulan');
		}
		else if($id != null AND $subid != null){
			$this->load->view('tambahPengusul');
		}
		else{
			$this->load->view('data');
		}
	}	

	public function konfirmasi($id = null, $subid = null)
	{
		if($id != null AND $subid == null){
			$this->load->view('listUsulan');
		}
		else if($id != null AND $subid != null){
			$this->load->view('listPengusul');
		}
		else{
			$this->load->view('konfirmasi');
		}
	}
}