jQuery(document).ready(function($) {
	
	$('.flexslider').flexslider({
		controlsContainer: '#content',
		slideshow: false,
		prevText: 'Previous',
		nextText: 'Next',
		keyboardNav: true,
		start: function(slider) {
        $('.total-slides').text(slider.count);
      },
      after: function(slider) {
        $('.current-slide').text(slider.currentSlide);
      }
	});


});
