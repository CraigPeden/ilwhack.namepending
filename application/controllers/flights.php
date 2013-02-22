<?php 

	class Flights extends CI_Controller 
	{

		function __construct() 
		{
			parent::__construct();
		}
		
		function index()
		{				
			
			$this->load->view('assets/header');
			$this->load->view('assets/flights', array('hop_1' => $this->flights_model->build_hop(1, false, false)));
			$this->load->view('assets/footer');
		}
		
	}
	
/* End of file Flights.php */
/* Location: ../application/controllers */