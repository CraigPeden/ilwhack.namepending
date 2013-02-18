<?php
class Search_airports extends CI_Controller {
	function do_search($search_term = "")
	{
		$this->load->model("airport_search");

		$airports = $this->airport_search->get_matching_airport_names($search_term);

		echo json_encode($airports);
	}
}