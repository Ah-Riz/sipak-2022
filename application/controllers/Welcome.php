<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RESTController.php';
// use chriskacerguis\RestServer\RestController;

class Welcome extends RestController  {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		if ($_POST==null){
			return(json_encode($this->db->query("SELECT * FROM makanan")->result()));
		}else{
			dump($kriteria);
			var_dump($this->db->query("SELECT * FROM makanan")->result());
		}

		// $this->load->view('welcome_message');
	}

	public function sipak(){
		dump('wew');
	}
}
