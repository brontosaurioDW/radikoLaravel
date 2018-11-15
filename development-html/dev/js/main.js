$(document).ready(function(){
	
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Menu Mobile
    $('.easy-sidebar-toggle').click(function(e) {
        e.preventDefault();
        $('body').toggleClass('toggled');
        $('.navbar.easy-sidebar').removeClass('toggled');
    });
});

$(window).on('scroll', function(){
    // Header home
    var headerHome = $('.is-home');
    
    if ($(window).scrollTop() > 54){
        $(headerHome).addClass('sticky');
        $(headerHome).addClass('sticky-header');
    } else {
        $(headerHome).removeClass('sticky');
        $(headerHome).removeClass('sticky-header');
    }
});

