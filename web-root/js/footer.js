// Helper Functions
  function getParameterByName(name, url) {
      if (!url) url = window.location.href;
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
          results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
  }
  function getTheFilterByUrl() {
    return '.'+window.location.href.split("/").pop();
  }
  function isInArray(value, array) {
    return array.indexOf(value) > -1;
  }

// Scroll to fixed
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });

// Initialize WOW 
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
 
// Navigation links
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})

// Init scrolling animations on links
	$(window).load(function(){
		
		$('.slide a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})

// Isotope Portfolio 
  $(window).load(function(){
    var $container = $('.portfolioContainer'),
        $body = $('body'),
        colW = 375,
        columns = null;

    $container.isotope({
      // disable window resizing
      resizable: true,
      masonry: {
        columnWidth: colW
      }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({	
            filter: selector,
         });
         return false;
    });

  var theFilter = getParameterByName('current');
  if (theFilter == null) {
    var theFilter = getTheFilterByUrl();
  }
  console.log('Current: '+theFilter);
  if ( isInArray(theFilter, ['.featured','.rome','.airport','.shore-excursion','.latium','.naples','.tuscany','.full-day','.half-day']) )
  {
    $container.isotope({ filter: theFilter });
    filterTours(theFilter);
  }
  else {
    if (theFilter == '.all') {
      theFilter = '*';
      $container.isotope({ filter: theFilter });
      filterTours(theFilter);
    }
    else { 
      $container.isotope({ filter: '.featured' });
    }
  }
  
});

function filterTours( theFilter ){
    $('.portfolioFilter .current').removeClass('current');
    $(".portfolioFilter a[data-filter='"+theFilter+"']").addClass('current');
    $('.portfolioContainer').isotope({ filter: theFilter });
    console.log('Tours filtered to: '+theFilter);
}

// Parallax effect
/*
$(document).ready(function(){
   // cache the window object
   $window = $(window);
 
   $('section[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
                     
      $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed'));
        yPos = -$scroll.data('speed');
         
        // background position
        var coords = 'center '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}); // close out script
*/