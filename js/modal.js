$(function(){

	// Set variables
	$facebookNavbar = $('.facebook-navbar');
	$trigger = $('.facebook-trigger');
	$closeButton = $('.facebook-close');
	$facebookFeed = $('.facebook-content');
	$mainPadding = $('#cff').css('padding');

	// Activate Trigger
	$trigger.click(function() {
		$(this).toggleClass( "visible" );
		$facebookFeed.toggleClass( "visible" );
  });

	$closeButton.click(function() {
		$trigger.toggleClass( "visible" );
		$facebookFeed.toggleClass( "visible" );
  });

	// Get Navigation Styles from feed plugin
	$facebookNavbar.css('background-color', $('#cff').css('background-color'));
	$facebookNavbar.css('padding-left', $mainPadding);
	$facebookNavbar.css('padding-right', $mainPadding);
	$facebookNavbar.css('padding-top', parseInt($mainPadding, 10)/2)+"px";
	$facebookNavbar.css('padding-bottom', parseInt($mainPadding, 10)/2)+"px";

});
