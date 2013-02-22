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
			$this->load->view('assets/flights', array('flights_one' => $this->flights_model->get_flight_results()));
			$this->load->view('assets/footer');
		}
		
	}
	
/* End of file Flights.php */
/* Location: ../application/controllers */