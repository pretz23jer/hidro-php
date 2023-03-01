<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_model extends CI_Model {

//Constructor
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

}