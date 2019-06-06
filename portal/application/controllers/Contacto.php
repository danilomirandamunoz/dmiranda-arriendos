<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contacto extends CI_Controller {

	public function Index()
	{
		$datos = array(
    	'param' => '',
    		'place' => '',
    		'accion' => ''
    	);
		$this->load->view("contacto", $datos);
	}
}
?>