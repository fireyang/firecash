<?php

class Welcome extends MY_Controller {

	function Welcome()
	{
		parent::MY_Controller();	
	}
	
	function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
