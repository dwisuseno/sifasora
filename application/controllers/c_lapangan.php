<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_lapangan extends CI_Controller {
	public function index(){
		$data['active_lapangan'] = "active";
		$data['title'] = "Lapangan | SIFASORA";
		$this->load->view('view_lapangan',$data);
	}
}