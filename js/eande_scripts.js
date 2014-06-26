$(document).ready(function() {
	$('#navigation-bar').singlePageNav({
		speed: 1000
	});
});

$(document).ready(function() {
	$('#menu_icon').click(function(){
		$('#navigation-bar').toggle(0);
	});
});