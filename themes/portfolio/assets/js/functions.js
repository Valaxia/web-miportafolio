(function($) {

	// Create a cache for masonry selection
	var $masonry = $(".masonry")

	// Clone portfolio items to get a second collection for Quicksand plugin
	var $portfolioClone = $masonry.clone();

	var site_host = document.location.host
	
	// Attempt to call Quicksand on every click event handler
	$('.sidenav__links li a').click(function(e) {
		e.preventDefault();

		var target_url = e.target.href.split('/')
		if (e.target.baseURI === e.target.href || target_url[target_url.length -1] === '#') {


			$('.foto-destacada').remove();
			$('.sidenav__links li').removeClass('current');
			
			// Get the class attribute value of the clicked link
			var $filterClass = $(e.target).parent().attr('data-id');

			if ( $filterClass == 'all' ) {
				var $filteredPortfolio = $portfolioClone.find('li');
			} else {
				var $filteredPortfolio = $portfolioClone.find('li[data-type~=' + $filterClass + ']');
			}
			
			// Call quicksand
			$masonry.quicksand( $filteredPortfolio , 
				{adjustHeight: false,
				useScaling: false, 
				easing: 'swing', 
				duration: 2000

				});


			$(e.target).parent().addClass('current');

			// Prevent the browser jump to the link anchor
		}
	})
	
	$('.sidenav__hamb-link').on('click', function(event) {
		event.preventDefault();
		$('.sidenav').toggleClass('show');
	});

})(window.jQuery);