<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penganugerahan extends CI_Controller {

	public function index()
	{
		$this->load->view('penganugerahan');
	}

	public function cetak()
	{
		$this->load->view('cetak');
	}

	public function update($id)
	{
		$this->load->view('update');
	}

}