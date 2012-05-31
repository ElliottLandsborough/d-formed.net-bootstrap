<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		redirect('http://'.$_SERVER['SERVER_NAME'].'/home', 'location');
	}
}