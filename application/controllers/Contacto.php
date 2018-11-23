<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

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
		$this->load->view('common/contacto.php');
		$this->load->view('parts/pie.php');

	}

	public function Correo()
	{
		$this->load->library('email');
		$this->load->helper('url');
		$this->load->helper('form');
		$nombre       =  $_POST['nombre'];
		$email        =  $_POST['email'];
		$mensaje      =  $_POST['mensaje'];
		$Destinatario =  "henry.guillen17@hotmail.com" ;
		$asunto       =  " Contacto  Empresa JS";
		$respuesta    = " El señor $Destinatario  de la Empresa Js \n ";
		$respuesta    .= " se pondra pronto en Contacto con ud";
		$contraparte  = " Su mensaje fue enviado con exito " ;
		// Parte de Contacto
		$paquete      =  " De el $nombre \n ";
		$paquete     .=  "Correo $email \n";
		$paquete     .=  "Mensaje  $mensaje";
 		mail($Destinatario, $asunto, $paquete);
 		// Parte de Respuesta 
 		mail($email, $contraparte, $respuesta);
 		$this->index();


 		/*$config= Array( 'protocol' =>'localhost', 'smtp_host' => 'localhost', 'smtp_port' => 'localhost', 'smtp_user'=> 'root', 'smtp_pass' =>'' );
		$this->load->library('email','$config');
		$this->email->set_newline("\r\n");

		$this->email->from('henduardox@gmail.com','nisha');
 		$this->email->to('henduardox@gmail.com');
 		$this->email->subject('this is email with subject');
 		$this->email->message('it s working properly');
 		if($this->email->send())
 		{ 
 		   echo "your email send";
 		} 
 		else 
 		{
 		   show_error($this->email->print_debugger()); 
 		}
 		*/

	}

}