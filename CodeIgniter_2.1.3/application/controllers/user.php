<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['users'] = array(
			"Robert",
			"Bob",
			"Charles",
			"Kim",
			"Gaya",
			"John"
			);
		$data['message'] = "This is a way to pass data to a file.";
		/*
		With the following statement, the controller will search the view folder for the file user_list_all and display it.*/
		//$this->load->view('user_list_all'); //Controller knows to look in views folder for this file (user_list_all.php).
		
		/* With the following statement, we are passing all the contents of the $data variable to the file user_list_all.
		Will do a var_dump of users in the file user_list_all:*/ 
		$this->load->view('user_list_all', $data);

	}
	public function edit()
	{
		echo "Hello. This is user controller. Edit Function.";
		$this->load->view('welcome_message');
	}
	public function show()
	{
		echo "Hello. This is user controller. Show Function.";
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */