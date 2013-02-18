<?php
class Airport_search extends CI_Model {
	function get_matching_airport_names($search)
	{
		$this->db->select("airport");
		$this->db->like("airport", $search);
		$database_response = $this->db->get("airport_codes");

		$airport_names = array();

		foreach ($database_response->result() as $airport)
		{
			array_push($airport_names, $airport->airport);
		}

		return $airport_names;
	}
}