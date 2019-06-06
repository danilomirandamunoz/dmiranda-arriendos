<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class QuienesSomos extends CI_Controller {

	public function Index()
	{
		$datos = array(
    	'param' => '',
    		'place' => '',
    		'accion' => ''
    	);
		$this->load->view("quienessomos", $datos);
	}
}
?>