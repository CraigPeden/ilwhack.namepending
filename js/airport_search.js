function do_search(search_term, sender)
{
	jQuery.get("index.php/ajax/search_airports/do_search/" + search_term, function(data) {
		jQuery(sender).attr("data-source", data.toString());
	});
}

jQuery(document).ready(function() {
	jQuery('input.airport').keyup(function() {
		var search_term = jQuery(this).val();

		do_search(search_term, this);
	});
});