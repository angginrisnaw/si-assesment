<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTahanan extends CI_Controller {

	public function index()
	{
		$this->load->view('data_tahanan');
	}
}