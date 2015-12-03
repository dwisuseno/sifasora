<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_home extends CI_Controller {
	public function index(){
		$data['active_home'] = "active";
		$data['title'] = "SIFASORA";
		$this->load->view('view_home',$data);
	}
}