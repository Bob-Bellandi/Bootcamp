<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent :: __construct();
		$this->load->model('My_model');
	}
	function index()
	{
		$some_variables['names'] = array("Joe", "Jim", "Bob", "Tom");
		$some_variables['my_favorite_color'] = "green";
		$this->session->set_userdata('user_id', 8);
		$data['my_query'] = $this->My_model->get_all_the_cities();
		$this->load->view('new_view', $data);
		// Following are some different ways to load a page.
		// $this->load->view('login', $some_variables); //'login' is a view page!
		// the parameter of redirect is as follows: '/controller_name/function_name/parameters_if_any/'
		// redirect('/main/go_to_new_view/'.$this->session->userdata('user_id').'/'); //a variable parameter
		// redirect('/main/go_to_new_view/8/'); //a value parameter
	}
	function go_to_new_view($param = 0)
	{
		$data['user_id'] = $this->session->userdata('userid');
		$this->load->view('login');
	}
}