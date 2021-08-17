<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('home');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['database'] = $this->home->get_all_data();
		$this->load->view('home/index', $data);
	}

	public function detail( $id ){
		$data = $this->home->get_all_data();
		$data['database'] = $this->searchForId($id, $data);
  		// echo "<pre>";
  		// print_r($data['database']);
  		// echo "<pre>";
  		// exit();
  		$this->load->view('home/details', $data);
	}

	public function searchForId($id, $array) {
	   foreach ($array as $key => $val) {
	       if ($val->id === $id) {
	           return $val;
	       }
	   }
	   return null;
	}
}
