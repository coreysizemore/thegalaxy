$(document).ready(function() {
	
	/* sticky navigation */
	
	$('#nav_bar').scrollFix({
		fixOffset: 1
	});
	
	/* fancybox */
	
	$('.fancybox').fancybox({
		helpers: {
		    overlay: {
		      locked: false
		    }
		  }
	});
	
	/* search & mobile nav */
	
	$('a#searchopen').click( function() { 
	    $('#search').slideToggle();
	    $('body').addClass('disablepagescroll');
	});
	
	$('a#searchclose').click( function() { 
	    $('#search').slideToggle();
	    $('body').removeClass('disablepagescroll');
	});
	
	$('a#mobileopen').click( function() { 
	    $('#mobile_nav').slideToggle();
	    $('#mobileopen').hide();
	    $('body').addClass('disablepagescroll');
	});
	
	$('a#mobileclose').click( function() { 
	    $('#mobile_nav').slideToggle();
	    $('#mobileopen').show();
	    $('body').removeClass('disablepagescroll');
	});
	
	/* jquery functionality */
	
	$( function() {
	    $( "#accordion" ).accordion({
	      	heightStyle: "content"
	    });
	} );
  
	$( "#tabs" ).tabs();
	
	/* slideshow */
	
	$('#slideshow_wrapper').slideShow(6000);
	
});

$.fn.slideShow = function(timeOut) {
	
	var $elem = this;
		
	this.children(':gt(0)').hide();
		
	setInterval(function() {
			
		$elem.children().eq(0).fadeOut().next().fadeIn().end().appendTo($elem);
	
	}, timeOut || 3000);
	
};