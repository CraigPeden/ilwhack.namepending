var next_hop_id = 1;
var hop_titles = ["Then go to", "Followed by", "And then", "Then stop at"];
var previous_title = -1;

function add_hop()
{
	var title_id = ++previous_title;

	if (title_id == hop_titles.length)
	{
		title_id = 0;
		previous_title = -1;
	}

	var hop_title = hop_titles[title_id];

	var hop_html = "" +
		'<div style="height: 0px; overflow: hidden;" class="single_hop" data-hop-id="' + next_hop_id + '">' +
			'<div class="transitionbulletone hop">•</div>' +
			'<div class="transitionbullettwo hop">•</div>' +
			'<div class="hop_container">' +
				'<div class="airports_body">' +
					'<span class="help-inline hop_container_title">' + hop_title + '</span>' +
					'<div class="input-prepend airport-container">' +
						'<span class="add-on"><i class="icon-plane"></i></span>' +
						'<input type="text" name="hop-' + next_hop_id + '-airport" autocomplete="off" class="span3 airport" placeholder="Airport">' +
					'</div>' +
					'<div class="input-prepend input-append hop length-container">' +
						'<span class="add-on">Stay For</span>' +
						'<input type="number" class="hop-length" name="hop-' + next_hop_id + '-days" autocomplete="off" value="0" min="0" max="99" id="hopDays">' +
						'<span class="add-on">Days</span>' +
					'</div>' +
					'<button class="pull-right btn btn-link remove-hop-button" data-hop-id="' + next_hop_id + '"><strong>X</strong></button>' +
				'</div>' +
			'</div>' +
		'</div>';
		
		$('#hop_container').append(hop_html);

		// Container is added hidden so now animate it to show it
		$('.single_hop[data-hop-id="' + next_hop_id + '"]').animate({
			height: '100px'
		}, 500);

		attatch_airport_search_event_hander();

		$('button.remove-hop-button').click(function() {
			remove_hop($(this).attr("data-hop-id"));

			return false; // Prevent form being submitted
		});

		next_hop_id++;
}

function remove_hop(hop_id)
{
	$('.single_hop[data-hop-id="' + hop_id + '"]').animate({
		height: '0px'
	}, 500, function() {
		$('.single_hop[data-hop-id="' + hop_id + '"]').remove();
	});
}

$(document).ready(function() {
	$('#add-hop-button').click(function() {
		add_hop();

		return false; // Prevent form being submitted
	});
});