<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        // cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Auth_model', 'auth');
        $this->load->model('Base_model', 'base');
		$this->load->library('pagination');
    }
	
	public function index()
	{
		$posting = new stdClass();
		$posting->seo_judul = null;
		$posting->konten = null;
		$posting->gambar_name = null;
		$posting->judul = null;

		$data['posting'] = $posting;
		$data['title'] = 'Tentang Kami';
		
		$this->template->load('client/template', 'client/about/about', $data);
	}
}
