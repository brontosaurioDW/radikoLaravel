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


    // Hace aparecer dummy counter en el carrito

    $(".js-btn-agregar").on("click", function(){ 

        event.preventDefault();
        console.log("hala");
        //$("#js-dummy-counter").removeClass('hidden');


     });



     $( "#fuck" ).click(function() {
        event.preventDefault();
        alert( "puta" );
    });   


     $('#fuck').on('click', function() {
        event.preventDefault();
        alert('hola');
});
    

});