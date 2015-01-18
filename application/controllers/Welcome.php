<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'welcome';
        $this->render();
	}
}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */