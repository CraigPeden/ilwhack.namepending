function do_search(search_term, sender)
{
	jQuery(sender).typeahead({
		source: function(query, process) {
			return jQuery.post(ci_site_url + '/ajax/search_airports/do_search/', {
				query: query
			}, function(data) {
				return process(data);
			});
		}
	});
}

function attatch_airport_search_event_hander()
{
	// This needs to be called every time a hop is added
	jQuery('input.airport').keyup(function() {
		var search_term = jQuery(this).val();

		do_search(search_term, this);
	});
}

jQuery(document).ready(function() {
	attatch_airport_search_event_hander();
});