<?php
class Testing extends CI_Controller {
	function index()
	{
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}

	function api_query()
	{
		$this->load->library("skyscanner");
		$data = $this->skyscanner->query_quotes_service("UK", "GBP", "en-gb", "EDI", "LHR", "2013-02-25");

		print_r($data);
	}
}