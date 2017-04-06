$(document).ready(function(){

	$(window).scroll(function () {
		if ($(this).scrollTop() > 250) {
			$('#scrollup').fadeIn();
		} else {
			$('#scrollup').fadeOut();
		}
	});
	
	// scroll body to 0px on click
	$('#scrollup').click(function () {
		$('#scrollup').tooltip('hide');
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	$('#scrollup').tooltip('show');

});