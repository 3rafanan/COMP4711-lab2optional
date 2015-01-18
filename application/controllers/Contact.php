<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'contact';
        $this->render();
	}
}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */