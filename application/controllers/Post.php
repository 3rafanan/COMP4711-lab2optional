<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('post');
	}
}

/* End of file Features.php */
/* Location: ./application/controllers/Features.php */