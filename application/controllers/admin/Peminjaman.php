<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        // // $this->load->model('Auth_model', 'auth');
        // $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['title'] = "Peminjaman";
        $this->template->load('template', 'peminjaman/data', $data);
    }

  
}
