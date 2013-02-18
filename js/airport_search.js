function do_search(search_term, sender)
{
	$.get("ajax/search_airports/do_search/" + search_term, function(data) {
		$(sender).attr("data-source", data);
	});
}

$(document).ready(function() {
	$('input.airport').keyup(function() {
		var search_term = $(this).val();

		do_search(search_term, this);
	});
});