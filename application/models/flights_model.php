<?php
class Flights_model extends CI_Model {
	function build_hop($hop_number, $origin, $earliest_departure)
	{
		$hop_data = array();

		$flight_results = $this->get_flight_results($hop_number);

		$quotes = $flight_results->Quotes;
		$carriers = $flight_results->Carriers;
		$places = $flight_results->Places;

		$quotes = $quotes->QuoteDto;	

		// Loop through quotes and remove unsuitable
		for ($i=0; $i < count($quotes); $i++) { 
			$quote = $quotes[$i];

			$flight->origin = $this->get_place_name($quote->OutboundLeg->OriginId, $places);
			$flight->destination = $this->get_place_name($quote->OutboundLeg->DestinationId, $places);
			$flight->carrier = $this->get_carrier_name($quote->OutboundLeg->CarrierIds->int, $carriers);
			$flight->departure_time = $quote->OutboundLeg->DepartureDate;
			$flight->arrival_time = $quote->OutboundLeg->ArrivalDate;
			$flight->cost = $quote->MinPrice;

			$logo_name = str_replace(" ", "_", strtoLower($flight->carrier)) . ".jpg";

			$flight->logo = base_url("/img/carriers/$logo_name");

			if (!$origin && !$earliest_departure)
			{
				array_push($hop_data, json_decode(json_encode($flight)));
			}
			else
			{
				if ($origin == $flight->origin)
				{
					array_push($hop_data, json_decode(json_encode($flight)));
				}
			}
		}

		return $hop_data;
	}

	function get_carrier_name($carrier_id, $carriers)
	{
		foreach ($carriers->CarriersDto as $carrier)
		{
			if ($carrier->CarrierId == $carrier_id)
			{
				return $carrier->Name;
			}
		}

		return FALSE;
	}

	function get_place_name($place_id, $places)
	{
		foreach ($places->PlaceDto as $place)
		{
			if ($place->PlaceId == $place_id)
			{
				return $place->Name;
			}
		}

		return FALSE;
	}

	function get_flight_results($hop)
	{
		$hop1_json_results = '{
		"BrowseQuotesResponseDto": {
		"Quotes": {
			"QuoteDto": [
			{
				"QuoteId": "1",
				"MinPrice": "720",
				"Direct": "true",
				"OutboundLeg": {
				"CarrierIds": { "int": "1" },
				"OriginId": "1",
				"DestinationId": "2",
				"DepartureDate": "2013-03-03T11:20:00",
				"ArrivalDate": "2013-03-03T18:20:00"
				}
			},
			{
				"QuoteId": "2",
				"MinPrice": "700",
				"Direct": "true",
				"OutboundLeg": {
				"CarrierIds": { "int": "2" },
				"OriginId": "1",
				"DestinationId": "2",
				"DepartureDate": "2013-03-03T14:43:00",
				"ArrivalDate": "2013-03-03T21:54:00"
				}
			},
			{
				"QuoteId": "3",
				"MinPrice": "697",
				"Direct": "true",
				"OutboundLeg": {
				"CarrierIds": { "int": "2" },
				"OriginId": "1",
				"DestinationId": "3",
				"DepartureDate": "2013-03-03T09:23:00",
				"ArrivalDate": "2013-03-03T17:23:00"
				}
			}
			]
		},
		"Places": {
			"PlaceDto": [
			{
				"PlaceId": "1",
				"Name": "Edinburgh",
				"Type": "Station"
			},
			{
				"PlaceId": "2",
				"Name": "New York Newark",
				"Type": "Station"
			},
			{
				"PlaceId": "3",
				"Name": "New York John F Kennedy",
				"Type": "Station"
			}
			]
		},
		"Carriers": {
			"CarriersDto": [
			{
				"CarrierId": "1",
				"Name": "Delta"
			},
			{
				"CarrierId": "2",
				"Name": "United"
			},
			{
				"CarrierId": "3",
				"Name": "American Airlines"
			},
			{
				"CarrierId": "4",
				"Name": "US Airways"
			}
			]
		}
		}
	}';

		$hop2_json_results = '{
		"BrowseQuotesResponseDto": {
		"-xmlns:xsd": "http://www.w3.org/2001/XMLSchema",
		"-xmlns:xsi": "http://www.w3.org/2001/XMLSchema-instance",
		"Quotes": {
			"QuoteDto": [
			{
				"QuoteId": "1",
				"MinPrice": "567",
				"Direct": "true",
				"OutboundLeg": {
				"CarrierIds": { "int": "3" },
				"OriginId": "1",
				"DestinationId": "3",
				"DepartureDate": "2013-03-06T11:31:00",
				"ArrivalDate": "2013-03-06T15:51:00"
				}
			},
			{
				"QuoteId": "2",
				"MinPrice": "600",
				"Direct": "true",
				"OutboundLeg": {
				"CarrierIds": { "int": "3" },
				"OriginId": "2",
				"DestinationId": "3",
				"DepartureDate": "2013-03-06T15:25:00",
				"ArrivalDate": "2013-03-06T20:45:00"
				}
			},
			{
				"QuoteId": "3",
				"MinPrice": "697",
				"Direct": "true",
				"OutboundLeg": {
				"CarrierIds": { "int": "4" },
				"OriginId": "1",
				"DestinationId": "3",
				"DepartureDate": "2013-03-03T08:21:00",
				"ArrivalDate": "2013-03-06T13:41:00"
				}
			}
			]
		},
		"Places": {
			"PlaceDto": [
			{
				"PlaceId": "1",
				"Name": "New York Newark",
				"Type": "Station"
			},
			{
				"PlaceId": "2",
				"Name": "New York John F Kennedy",
				"Type": "Station"
			},
			{
				"PlaceId": "3",
				"Name": "Las Vegas",
				"Type": "Station"
			}
			]
		},
		"Carriers": {
			"CarriersDto": [
			{
				"CarrierId": "1",
				"Name": "Delta"
			},
			{
				"CarrierId": "2",
				"Name": "United"
			},
			{
				"CarrierId": "3",
				"Name": "American Airlines"
			},
			{
				"CarrierId": "4",
				"Name": "US Airways"
			}
			]
		}
		}
	}';

	$hop3_json_results = '{
		"BrowseQuotesResponseDto": {
		"-xmlns:xsd": "http://www.w3.org/2001/XMLSchema",
		"-xmlns:xsi": "http://www.w3.org/2001/XMLSchema-instance",
		"Quotes": {
			"QuoteDto": [
			{
				"QuoteId": "1",
				"MinPrice": "276",
				"Direct": "true",
				"OutboundLeg": {
				"CarrierIds": { "int": "2" },
				"OriginId": "1",
				"DestinationId": "2",
				"DepartureDate": "2013-03-07T13:13:00",
				"ArrivalDate": "2013-03-06T15:43:00"
				}
			},
			{
				"QuoteId": "2",
				"MinPrice": "256",
				"Direct": "true",
				"OutboundLeg": {
				"CarrierIds": { "int": "2" },
				"OriginId": "1",
				"DestinationId": "2",
				"DepartureDate": "2013-03-07T15:31:00",
				"ArrivalDate": "2013-03-06T18:02:00"
				}
			},
			{
				"QuoteId": "3",
				"MinPrice": "300",
				"Direct": "true",
				"OutboundLeg": {
				"CarrierIds": { "int": "4" },
				"OriginId": "1",
				"DestinationId": "2",
				"DepartureDate": "2013-03-08T16:43:00",
				"ArrivalDate": "2013-03-06T19:13:00"
				}
			}
			]
		},
		"Places": {
			"PlaceDto": [
			{
				"PlaceId": "1",
				"Name": "Las Vegas",
				"Type": "Station"
			},
			{
				"PlaceId": "2",
				"Name": "San Francisco",
				"Type": "Station"
			}
			]
		},
		"Carriers": {
			"CarriersDto": [
			{
				"CarrierId": "1",
				"Name": "Delta"
			},
			{
				"CarrierId": "2",
				"Name": "United"
			},
			{
				"CarrierId": "3",
				"Name": "American Airlines"
			},
			{
				"CarrierId": "4",
				"Name": "US Airways"
			}
			]
		}
		}
	}';

		$flights_one = json_decode($hop1_json_results);
		$flights_two = json_decode($hop2_json_results);
		$flights_three = json_decode($hop3_json_results);
		
		
		if ($hop == 1)
		{
			return $flights_one->BrowseQuotesResponseDto;
		}
		else if ($hop == 2)
		{
			return $flights_two->BrowseQuotesResponseDto;
		}
		else
		{
			return $flights_three->BrowseQuotesResponseDto;
		}
	}
}