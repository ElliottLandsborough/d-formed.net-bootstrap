<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('pages/contact');
		$this->load->view('footer');
	}

	public function email()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'xss_clean');
		$this->form_validation->set_rules('subject', 'Subject', 'xss_clean');
		$this->form_validation->set_rules('message', 'Message', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE)
		{
			$input['fail']=validation_errors();
		}
		else
		{
			$this->load->library('email');
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
	        $this->email->from($email,$name);
        	$this->email->to('hello@d-formed.net');
        	if ($subject=='')
        	{
        		$subject = 'No Subject';
        	}
        	if ($phone != '')
        	{
        		$message = 'Tel:'.$phone.'

'.$message;
        	}
        	$this->email->subject($subject);
        	$this->email->message($message);    
        	$this->email->send();
			$input['success']=true;	
		}
		$this->load->view('header');
		if (isset($input['success']))
		{
			$this->load->view('pages/email',$input);
		}
		else if (isset($input['fail']))
		{
			$this->load->view('pages/contact',$input);
		}
		$this->load->view('footer');
	}

	public function thanks()
	{
		$this->load->view('header');
		$this->load->view('pages/thanks');
		$this->load->view('footer');
	}
}
