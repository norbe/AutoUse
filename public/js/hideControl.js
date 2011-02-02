/**
 * AJAX SUBMIT
 */


$("table.hide-control thead").livequery("click", function(e) {
	if($(this).next().is(":hidden"))
		$(this).next().show();
	else
		$(this).next().hide();
	return false;
});