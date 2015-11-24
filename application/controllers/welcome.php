<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form', 'html', 'url'));
		$this->load->library('form_validation');
		$this->load->view('index');
	}

	public function contact()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules('name', 'Name', 'required|alpha');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('message', 'Messsage', 'required');

		if($this->form_validation->run() === false)
		{
			echo 'unsuccessfull';
		}
		else
		{
			$post_name = $this->input->post('name');
			$post_email = $this->input->post('email');
			$post_message = $this->input->post('message');
			echo 'successfull!';
			echo 'test';
			$this->contact_model->save_contact($post_name, $post_email, $post_message);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */