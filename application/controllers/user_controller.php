<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_controller extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }

  public function login()
  {
    $this->load->view('login');
  }

}
