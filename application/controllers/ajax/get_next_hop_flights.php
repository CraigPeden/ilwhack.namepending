<?php
class Get_next_hop_flights extends CI_Controller {
	function index()
	{
		$this->load->model("flights_model");

		$hop_number = $this->input->get("hop_number");
		$origin = $this->input->get("origin");
		$arrival_time = $this->input->get("arrival_time");
		$stopover_time = $this->input->get("stopover_time");

		$arrival_time = new DateTime($arrival_time);
		$stopover_time = new DateInterval("P0" . $stopover_time . "D");
		$arrival_time->add($stopover_time);

		$earliest_departure = $arrival_time;

		$flights_data = $this->flights_model->build_hop($hop_number, $origin, $earliest_departure);

		$data['flights'] = $flights_data;
		$data['hop_number'] = $hop_number;
		$data['num_hops'] = $this->input->get("num_hops");

		$this->load->view("assets/flights_table", $data);
	}
}