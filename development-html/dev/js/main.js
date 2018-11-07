$(document).ready(function(){

	var headerHome = $('.is-home');

	$(window).scroll(function(){
        if ($(window).scrollTop() > 54){
            $(headerHome).addClass('sticky');
            $(headerHome).addClass('sticky-header');
        } else {
            $(headerHome).removeClass('sticky');
        	$(headerHome).removeClass('sticky-header');
        }
    });

    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Menu Mobile
    $('.easy-sidebar-toggle').click(function(e) {
        e.preventDefault();
        $('body').toggleClass('toggled');
        $('.navbar.easy-sidebar').removeClass('toggled');
    });

    $('html').on('swiperight', function() {
        $('body').addClass('toggled');
    });
    
    $('html').on('swipeleft', function() {
        $('body').removeClass('toggled');
    });
});

