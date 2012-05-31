<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$args = array(
			'numberposts'     => 99,
			'category'        => 3,
			'post_status'     => 'publish'
		);
		$input['posts'] = get_posts($args);
		$this->load->view('header');
		$this->load->view('pages/news',$input);
		$this->load->view('footer');
	}

	public function post($key)
	{
		$input['post']=wp_get_single_post(intval($key));
		$this->load->view('header');
		$this->load->view('pages/news',$input);
		$this->load->view('footer');
	}
}