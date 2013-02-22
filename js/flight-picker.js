function add_next_hop(sender)
{
	// DISABLE ALL THE BUTTONS!
	$('button.select_flight_button').attr("disabled", "disabled");

	$(sender).addClass("btn-success");
	$(sender).text("Selected!");

	var hop_number = $(sender).attr("data-hop");
	var origin = $(sender).attr("data-destination");
	var arrival_time = $(sender).attr("data-arrival-time");
	var stopover_time = 1;

	$.get(ci_site_url + "/ajax/get_next_hop_flights", {
		"hop_number": parseInt(hop_number) + 1,
		"origin": origin,
		"arrival_time": arrival_time,
		"stopover_time": stopover_time,
		"num_hops": num_hops
	}, function(data) {
		$('#hop-flights-container').append(data);

		$('button.select_flight_button').click(function() {
			add_next_hop(this);
		});

		calculate_total();
	});
}

function calculate_total()
{
	var total = 0;

	$('button.select_flight_button.btn-success').each(function(index, element) {
		total += parseInt($(element).attr("data-price"));
	});

	$('#price-container').text("Total: £" + total);
}

$(document).ready(function() {
	$('button.select_flight_button').click(function() {
		add_next_hop(this);
	});
});