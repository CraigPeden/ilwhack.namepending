<?php
class Flights_model extends CI_Model {

	function get_flight_results()
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

	$flights_one = json_decode($hop1_json_results);
	
	return $flights_one;
	
	}
}