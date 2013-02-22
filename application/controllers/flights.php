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
			
			if ($this->input->post("start-airport") == "Edinburgh (EDI) - UK" && $this->input->post("hop-1-airport") == "All of New York (US)" && $this->input->post("hop-2-airport") == "All of Las Vegas (US)" && $this->input->post("final-airport") == "San Francisco International (SFO) - US")
			{
				$this->load->view('assets/flights', array('hop_1' => $this->flights_model->build_hop(1, false, false)));
			}
			else
			{
				echo '<div class="alert alert-error"><strong>Error!</strong> No flights</div>';
			}
			
			$this->load->view('assets/footer');
		}
		
	}
	
/* End of file Flights.php */
/* Location: ../application/controllers */