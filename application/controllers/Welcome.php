<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . 'libraries/RESTController.php';
// require '/app/application/controllers/RestController.php';
require '/app/vendor/chriskacerguis/codeigniter-restserver/src/RestController.php';
use chriskacerguis\RestServer\RestController;

class Welcome extends CI_Controller  {

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
	public function index($kriteria='')
	{
		var_dump($kriteria);
		var_dump($_POST);
		$this->load->database();
		if ($kriteria==''){
			echo(json_encode($this->db->query("SELECT makanan FROM makanan")->result()));
		}else{
			var_dump($kriteria);
			// var_dump($this->db->query("SELECT * FROM makanan")->result());
		}
		// var_dump(base_url());

		// $this->load->view('welcome_message');
	}

	public function sipak(){
		dump('wew');
	}
}
