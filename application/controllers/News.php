<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('news');
	}
}

/* End of file News.php */
/* Location: ./application/controllers/News.php */
