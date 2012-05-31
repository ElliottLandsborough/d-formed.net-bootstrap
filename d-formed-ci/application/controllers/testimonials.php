<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonials extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('pages/testimonials');
		$this->load->view('footer');
	}
}