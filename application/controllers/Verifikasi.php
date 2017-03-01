<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index()
	{
		$this->load->view('kl');
	}

	public function lihat($id = null, $subid = null)
	{
		if($id != null AND $subid == null){
			$this->load->view('lihat');
		}
		else if($id != null AND $subid != null){
			$this->load->view('verifikasi');
		}
		else{
			//echo "<script>history.go(-1);</script>";
		}
	}

	public function cetakMemo()
	{

		$this->load->view('cetakMemo');
	}

	public function cetakDaftarGTK()
	{
		$this->load->view('instansi');
	}
}