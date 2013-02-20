<?php
class Airport_search extends CI_Model {
	function get_matching_cities($search)
	{
		$query =	"SELECT DISTINCT `municipality`, `iso_region`
					 FROM `airports`
					 WHERE
						 `municipality` LIKE '%" . $this->db->escape_like_str($search) . "%';";

		$database_response = $this->db->query($query);

		$cities = array();

		if ($database_response->num_rows() == 1)
		{
			$city = $database_response->row();
			array_push($cities, "All of " . $city->municipality);
		}
		else
		{
			foreach ($database_response->result() as $city) {
				array_push($cities, "All of " . $city->municipality . " (" . $city->iso_region . ")");
			}
		}

		if (count($cities) > 8)
		{
			return array();
		}

		return $cities;
	}

	function get_matching_airport_names($search)
	{
		$this->db->select("airport");
		$this->db->like("airport", $search);
		$database_response = $this->db->get("airport_codes");

		$airport_names = array();

		foreach ($database_response->result() as $airport)
		{
			array_push($airport_names, trim($airport->airport));
		}

		if (count($airport_names) > 8)
		{
			return array();
		}

		return $airport_names;
	}
}