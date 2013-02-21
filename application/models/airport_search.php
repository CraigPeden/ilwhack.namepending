<?php
class Airport_search extends CI_Model {
	function get_matching_countries($search)
	{
		$this->db->like("name", $search, "after");
		$database_response = $this->db->get("_countries");

		if ($database_response->num_rows() > 3)
		{
			return array();
		}

		$countries = array();
		foreach ($database_response->result() as $country)
		{
			$country_string = "All of " . $country->name;

			array_push($countries, $country_string);
		}

		return $countries;
	}

	function get_matching_cities($search)
	{
		$this->db->like("name", $search, "after");
		$this->db->where("single_airport", "0");
		$database_response = $this->db->get("_cities");

		if ($database_response->num_rows() > 3)
		{
			return array();
		}

		$cities = array();
		foreach ($database_response->result() as $city)
		{
			$city_string = "All of " . $city->name . " (" . $city->country_id . ")";

			array_push($cities, $city_string);
		}

		return $cities;
	}

	function get_matching_airports($search)
	{
		$this->db->like("name", $search);
		$database_response = $this->db->get("_airports");

		if ($database_response->num_rows() > 8)
		{
			return array();
		}

		$airports = array();
		foreach($database_response->result() as $airport)
		{
			$airport_string = $airport->name . " (" . $airport->code . ") - " . $airport->country_id;

			array_push($airports, $airport_string);
		}

		return $airports;
	}
}