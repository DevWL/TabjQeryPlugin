// animate scroling by target atribute
	(function($){
	    $.fn.animateScroll = function(){
	        console.log($('[scroll]'));
	        $('[scroll]').click(function(){
	            selector = $($(this).attr('scroll'));
	            console.log(selector);
	            console.log(selector.offset().top);
	            $('html body').animate(
	                {scrollTop: (selector.offset().top)}, //- $(window).scrollTop()
	                1000
	            );
	        });
	    }
	})(jQuery);

	// RUN
	jQuery(document).ready(function($) {
	    $().animateScroll();
	});

	// RUN ON ELEMENT WITH TAG - SCROLL=".SELECTOR"
	// <a scroll=".products">Garnitury</a>

//Show hide nav - class
	(function($) {
	    $.fn.extend({
	        showHideNav: function(options) {
	            var defaults = {
	                target: 'none',
	            };
	            options = $.extend(defaults, options);
	            var target = $(options.target);
	            
	            console.log(target);

	            this.on('click', function(){
	                target.toggleClass('hide');
	            });
	        }
	    });
	})(jQuery);

	// USE EXAMPLE
	jQuery(document).ready(function($) {
	    $('.mobile-button').showHideNav({target: '.navbar .nav ul'});
	});