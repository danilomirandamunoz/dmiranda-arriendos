<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Propiedad extends CI_Controller {

	public function Index($titulo = null)
	{
        
		$datos = array(
    	'param' => '',
    		'place' => '',
    		'accion' => ''
    	);
		$this->load->view("detallepropiedad", $datos);
	}
    
    public function Detalle($titulo = null)
	{
        
		$datos = array(
    	'param' => '',
    		'place' => '',
    		'accion' => ''
    	);
		$this->load->view("detallepropiedad", $datos);
	}
}
?>