<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();//esta linea siempre debe ir 
	}



	//esta funcion es la que guarda en la base de dato
	function guardar($data)
	{
		$query = $this->db->insert('usuarios', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido']));

		if ($this->db->affected_rows() > 0) 
		{
		$this->load->helper('form');

		//$this->load->model('form_model');  
	}

	public function index()
	{
		$this->load->view('formulario');
	}

	function validar()
// echo aqui se hacen los cambios

{

$name = $this->input->post('nombre2');
$lastname = $this->input->post('apellido_paterno');
$correo = $this->input->post('correo');
echo "nombre:".$nombre2."apellido_paterno:".$lastname."correo:".$"correo";
		
	//estamos creando array		
			
		

		$data = array('nombre' => $this->input->post('nombre2' ),'apellido' => $this->input->post('apellido_paterno') );
		//aqui se llama la funcion para guardar en la base de datos
		$this->form_model->guardar($data);
	}

}
			