/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();


	/* initialize map higlight */
    (function () {
        var $map = $('.map');
        if($map.length===0 || $('map').length ===0)
            return;
        var imgSizeHolder = $map[0].naturalWidth;
        $areas = $('map').find('area');
        var initCoords = new Array();
        $areas.each(function(index,area){
           initCoords.push($(area).attr('coords').split(','));
        });
        function scale() {
            $areas.each(function(index, area){
                var coords = initCoords[index].slice();
                $.each(coords,function(index,el){
                    el = el*($map.width()/imgSizeHolder);
                    coords[index] = el;
                });
                $areas.eq(index).attr('coords',coords.join(','));
            });
        }
        scale();
        $(window).on('resize',scale);
	})();
	
});// END #####################################    END