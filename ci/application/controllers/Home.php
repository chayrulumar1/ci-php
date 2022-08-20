<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    //public function __construct()
    //{
    //parent::__construct();
    //$this->load->model('stock');
    //}
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
      
    }
}

//tambah stock
