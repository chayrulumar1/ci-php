<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masuk extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }
}
