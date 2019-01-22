<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() // index akan otomatis terpanggil walau takdi panggil. jika kita tidak memanggil nama controller 
	//maka otomatis akan ke function index

	{
		$this->load->view('welcome_message'); // mengload yang ada di view jika load model maka mengload file yg ada di model
	}
}
