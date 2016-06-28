//fancybox instantiation
$(function() {

	$("a.lightbox").fancybox({
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic'
	});

	
});

	
//validation
$(function(){
	$('#contact_form').validate({
		submitHandler: function(form) {
		    $(form).ajaxSubmit({
			    url: 'mail.php',
			    success: function() {
			    	$('#contact_message, #contact_form').hide();
			    	$('#success_message').removeClass("noshow");
			    }
		    });
	    }
	});         
});


//flexslider	
$(function() {
	$('.flexslider').flexslider({
		controlNav: false, 		//make this 'true' to add a list of numbers under the slides
		directionNav: true,		//make this 'true' to add 'prev' and 'next' links under the slides
		prevText: "(",          
		nextText: ")"
	});
});
	
	
	
//to top
$(function() {	
	$().UItoTop({ easingType: 'easeOutQuart' });	
});

	
	
//slight variant on Chris Coyier's http://css-tricks.com/convert-menu-to-dropdown/
$(function() {
			
	

});

	
//smooth scrolling
$(function() {
    $('ul.main_menu li a, #call_to_action').bind('click',function(event){
        var $anchor = $(this);
        
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 900,'easeOutQuart');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        event.preventDefault();
    });
});


//placeholder
$(function() {
	if (!Modernizr.input.placeholder){
	 $('input[placeholder], textarea[placeholder]').placeholder();
	}
});	
