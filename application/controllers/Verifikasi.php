<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index()
	{
		$this->load->view('instansi');
	}

	public function verifikasis()
	{

		$this->load->view('verifikasi');
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