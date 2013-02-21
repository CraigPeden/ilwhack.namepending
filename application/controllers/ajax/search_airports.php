<?php
class Search_airports extends CI_Controller {
	function do_search()
	{
		$this->load->model("airport_search");

		$query = $this->input->post("query");

		$data = $this->airport_search->get_matching_countries($query);
		$data = array_merge($data, $this->airport_search->get_matching_cities($query));
		$data = array_merge($data, $this->airport_search->get_matching_airports($query));

		header('Content-type: application/json');
		echo json_encode($data);
	}
}