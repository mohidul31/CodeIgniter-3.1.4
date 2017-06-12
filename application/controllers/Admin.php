<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_dashboard');
		$this->load->view('view_footer');
	}

}

/********************End of file********************/
/**
 * The File is created by
 * @ H M Mohidul Islam (Shovon)
 */