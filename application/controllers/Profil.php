<?php
defined('BASEPATH') OR exit('No direct script access allowed'
  );

class Profil extends CI_Controller {

  public function index()
  {
    	$this->load->view('v_profil');
  }
  public function detail_profil($nama='', $alamat='')
  {
      $data['nama']=$nama;
      $data['alamat']=$alamat;
      $data['nama_controller']=$this->uri->segment(1);
      $data['nama_function']=$this->uri->segment(2);
      $data['p1']=$this->uri->segment(3);
      $data['p2']=$this->uri->segment(4);
      $data['p3']=$this->uri->segment(5);
      $this->load->view('v_detail', $data);
  }

}
 ?>
