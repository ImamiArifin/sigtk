<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KL extends CI_Controller {

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
			$this->load->view('detail');
		}
		else{
			echo "<script>history.go(-1);</script>";
		}
	}

	public function usulan()
	{
		$this->load->view('usulan');
	}


}
