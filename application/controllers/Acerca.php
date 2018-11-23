<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acerca extends CI_Controller {

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
	function __construct()
	{
		parent:: __construct();
        $this->load->helper('form');  
        $this->load->library('form_validation');
        $this->load->helper('html');         
        $this->load->helper('url');  
		echo link_tag('css/bootstrap.min.css');
	}
	public function index()
	{
        $this->load->view('parts/menu.php');
		$this->load->view('common/acerca.php');
		$this->load->view('parts/pie.php');


	}
}