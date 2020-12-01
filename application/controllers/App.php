<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->api->CheckSession();
     date_default_timezone_set("Asia/Jakarta");
  }

  function index()
  {
    $data['info'] = $this->db->get_where('company',['idcompany'=>$this->session->userdata('idcompany')])->row();
    $this->load->view('dashboard/index',$data);
    // echo $this->uuid->v4();
  }

}
