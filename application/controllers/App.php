<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('App_model');
	}


	function index(){
		$data['base_url'] = $this->config->item('base_url');
		redirect('inicio');
	}

	function ayuda(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('ayuda', $data);
	}

	function coins(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('monedas', $data);
	}

	function puntos(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('puntos', $data);
	}

	function actualizar(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('actualizar', $data);
	}

	function empresa(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('empresa', $data);
	}

	function demo(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('demo', $data);
	}	

	function unirte(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('unirte', $data);
	}

	function pregunta(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('pregunta', $data);
	}

	function politica(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('politica', $data);
	}

	function afiliado(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('adiliado', $data);
	}

	function acerca(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('acerca', $data);
	}

	function soporte(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('soporte', $data);
	}

}