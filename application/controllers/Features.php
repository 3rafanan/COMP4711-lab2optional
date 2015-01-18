<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
        $this->data['pagebody'] = 'features';
        $this->render();
	}
}

/* End of file Features.php */
/* Location: ./application/controllers/Features.php */