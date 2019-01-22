<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
    $data['judul'] = "Halaman Utama";

    $this->load->view('templates/header',$data); // mengload yang ada di view jika load model maka mengload file yg ada di model
    $this->load->view('v_dasboard');
    $this->load->view('templates/footer');
    
	}
  public function kontak()
  {
    $data['judul'] = "Contact Person";

    $this->load->view('templates/header',$data); 
    $this->load->view('v_kontak');
    $this->load->view('templates/footer');
  }
  public function destinasi()
  {
    $data['judul'] = "Destination";

    $this->load->view('templates/header',$data); 
    $this->load->view('v_destinasi');
    $this->load->view('templates/footer');
  }
  public function galeri(){
    $data['judul'] = "Galery";

    $this->load->view('templates/header',$data); 
    $this->load->view('v_galeri');
    $this->load->view('templates/footer');
  }
  public function pesan()
  {
    $data['judul'] = "Booking";

    $this->load->view('templates/header',$data); 
    $this->load->view('v_pesan');
    $this->load->view('templates/footer');
  }
  public function sigin()
  {
		$data['judul'] = "Sig In";

    $this->load->view('templates/header',$data); 
    $this->load->view('v_sigin');
    $this->load->view('templates/footer');
	}
  public function register()
  {
		$data['judul'] = "Register";

    $this->load->view('templates/header',$data); 
    $this->load->view('v_register');
    $this->load->view('templates/footer');
	}
}
