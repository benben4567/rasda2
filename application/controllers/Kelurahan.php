<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelurahan extends CI_Controller {

	public function index()
	{
		$this->load->view('template/kelurahan');
	}
}
