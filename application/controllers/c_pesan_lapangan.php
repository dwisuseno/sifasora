<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_pesan_lapangan extends CI_Controller {
	public function index(){
		$data['active_pesan'] = "active";
		$data['title'] = "Pemesanan | SIFASORA";
		$this->load->view('view_pesan',$data);
	}
}