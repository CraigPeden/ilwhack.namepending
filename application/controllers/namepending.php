<?php 

	class Namepending extends CI_Controller 
	{

		function __construct() 
		{
			
			parent::__construct();
			/*if (!$this->User_model->logged_in()) 
			{
				$this->session->set_flashdata('current_url', uri_string());
				redirect('Login');	
			}*/
		}

		// Main Page
		
		function index()
		{				
			$this->load->view('assets/header');
			$this->load->view('assets/footer');
		}
		
	}
	
/* End of file Namepending.php */
/* Location: ../application/controllers */