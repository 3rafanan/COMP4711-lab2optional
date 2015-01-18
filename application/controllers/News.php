<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'news';
        $this->render();
	}
}

/* End of file News.php */
/* Location: ./application/controllers/News.php */
