<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){



		parent::__construct();
		$this->load->helper('form');
		$this->load->model('form_model'); 
	}
		public function index()
	{
		$this->load->view('formulario');
	}
	

	//esta funcion es la que guarda en la base de dato
	

	

	function validar()
// echo aqui se hacen los cambios

{

$name = $this->input->post('nombre');
$lastname = $this->input->post('apellido');
$correo = $this->input->post('correo');
echo "nombre:".$name."apellido:".$lastname."correo:".$"email";

		
	
$data = array('nombre' => $this->input->post('nombre' ),'apellido' => $this->input->post('apellido')"correo"=>$this=>input->post("correo"));
		
		$this->form_model->guardar($data);
	}



}
			