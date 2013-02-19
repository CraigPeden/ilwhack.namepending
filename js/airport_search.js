function do_search(search_term, sender)
{
	jQuery(sender).typeahead({
		source: function(query, process) {
			return jQuery.post('index.php/ajax/search_airports/do_search/', {
				query: query
			}, function(data) {
				return process(data);
			});
		}
	});
}

jQuery(document).ready(function() {
	jQuery('input.airport').keyup(function() {
		var search_term = jQuery(this).val();

		do_search(search_term, this);
	});
});