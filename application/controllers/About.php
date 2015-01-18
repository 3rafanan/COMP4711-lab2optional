<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'about';
        $this->render();
	}
}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
