<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
        $this->data['pagebody'] = 'post';
        $this->render();
	}
}

/* End of file Post.php */
/* Location: ./application/controllers/Post.php */