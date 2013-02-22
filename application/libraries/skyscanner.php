<?php
class Skyscanner {
	function query_quotes_service($country, $currency, $locale, $origin, $destination, $date)
	{
		$url = "http://partners.api.skyscanner.net/apiservices/browsequotes/v1.0/$country/$currency/$locale/$origin/$destination/$date?apiKey=" . skyscanner_api_key();

		$opts = array(
			'http' => array(
				'method' => 'GET',
				'header' => "Accept-language: en\r\n" .
							"Cookie: foo=bar\r\n"
			)
		);

		$context = stream_context_create($opts);

		$returned_data = file_get_contents($url, FALSE, $context);

		$returned_data = json_decode($returned_data);

		return $returned_data;
	}
}