<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_model extends CI_Model
{
	function get_all_the_cities()
	{
		$zebra = $this->db->get('city')
						  ->result();
		return $zebra;
	}
}