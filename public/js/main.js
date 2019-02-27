$(document).ready(function() {

    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Menu Mobile
    $('.easy-sidebar-toggle').click(function(e) {
        e.preventDefault();
        $('body').toggleClass('toggled');
        $('.navbar.easy-sidebar').removeClass('toggled');
    });

    // Upload de imagen - Estilo del boton
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function(input) {
        var label = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener('change', function(e) {
            var fileName = '';
            if (this.files && this.files.length > 1) {
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            } else {
                fileName = e.target.value.split('\\').pop();
                console.log(fileName);
            }

            if (fileName) {
                label.querySelector('span').innerHTML = fileName;
            } else {
                label.innerHTML = labelVal;
            }
        });
    });

    // Select time 
    $('ul.times').each(function(index, el) {
        var timeLink = $(this).find('.js-time');

        $(timeLink).each(function(index, el) {
            $(this).on('click', function(event) {
                event.preventDefault();
                $('.js-time').removeClass('active');
                $(this).addClass('active');
            });
        });
    });

    // Logout
    $('.js-logout').on('click', function() {
        localStorage.removeItem("nombreHuertaLocal");
        localStorage.removeItem("direccionParaElPedido");
        localStorage.removeItem("IDHuertaLocal");
    });

    /*  CARRITO*/
        // Mostrar nombre de la huerta desde locaStorage
        if (localStorage.getItem("nombreHuertaLocal")) {
            var nombreDelLocal = localStorage.getItem("nombreHuertaLocal");
            $('#nombreHuertaActual').text(nombreDelLocal);
        }

        // Vaciar localStorage si se vacia el carrito
        $('.js-vaciar-carrito').on('click', function(event) {
            localStorage.removeItem("nombreHuertaLocal");
            localStorage.removeItem("IDHuertaLocal");
            localStorage.removeItem("direccionParaElPedido");
        });

        // Chequear si hay productos en el carrito y si hay, confirmar cambio de huerta
        $('.js-check-huerta').each(function() {
            $(this).on('click', function(event) {
                event.preventDefault();

                var ruta                  = $(this).attr('href');
                var nombreHuertaCarrito   = $(this).find('input[name="nombreEstaHuerta"]').val();
                var nombreDelLocal        = localStorage.getItem("nombreHuertaLocal");

                console.log(ruta);
                console.log(nombreDelLocal);
                console.log(nombreHuertaCarrito);

                if (nombreDelLocal && nombreHuertaCarrito != nombreDelLocal) {                   
                    $('#confirmar-vaciar-carrito').modal('show');
                    $('#nombre-huerta-actual-modal').text(nombreDelLocal);

                    $(window).on('shown.bs.modal', function() {
                        ModalConfirm(function(confirm) {
                            if (confirm) {                                   

                                // Ajax para destruir el carrito
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                });

                                $.ajax({
                                    url: '/carrito?vaciar=1',
                                    type: 'GET',
                                    success: function(result) {
                                        localStorage.removeItem("nombreHuertaLocal");
                                        localStorage.removeItem("IDHuertaLocal");
                                        window.location = ruta;
                                    },
                                });
                            }
                        });
                    });
                } else {
                    window.location = ruta;
                }
                
            });
        });

        // Chequear contenido del carrito y mostrar canasta con puntito verde

        var puntitoVerde = $('.js-cart-content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        $.ajax({
            url: '/carrito/chequearContenidoCarrito',
            type: 'GET',
            success: function(result) {
                if (result['contenidoDelCarrito'].length == 0) {
                    $(".js-cart-content").removeClass('d-block');
                } else {
                    $(".js-cart-content").addClass('d-block');
                }
            },
        });

        // Ajax agregar producto al carrito
        $('.js-agregar-producto').on('click', function(event) {
            event.preventDefault();

            if ($('input[name="product_qty"]').val() == '') {

                $('.js-error-qnt').removeClass('d-none');
                $('.js-error-qnt').text('Por favor agrega una cantidad');

            } else if ($('input[name="product_qty"]').val() < 1 || $('input[name="product_qty"]').val() > 10) {
                $('.js-error-qnt').removeClass('d-none');
                $('.js-error-qnt').text('La cantidad del producto debe ser entre 1 y 10');
            } else {

                $('.js-error-qnt').addClass('d-none');

                var ruta = $(this).parents('form').prop('action');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                });

                $.ajax({
                    url: ruta,
                    type: 'POST',
                    data: {
                        product_id: $('input[name="product_id"]').val(),
                        product_qty: $('input[name="product_qty"]').val(),
                        huerta_id: $('input[name="huerta_id"]').val(),
                        huerta_nombre: $('input[name="huerta_nombre"]').val(),
                        unidad: $('input[name="unidad"]').val(),
                    },
                    success: function(result) {
                        if (result['success'] == 'ok') {
                            var huertaLocal = $('input[name="huerta_nombre"]').val();
                            var huertaLocalId = $('input[name="huerta_id"]').val();
                            localStorage.setItem('nombreHuertaLocal', huertaLocal);                        
                            localStorage.setItem('IDHuertaLocal', huertaLocalId);             

                            $('input[name="product_qty"]').val("");
                            $('#producto-detalle').modal('hide');

                            setTimeout(function() {
                                $(".js-tooltip").fadeIn();

                                setTimeout(function() {
                                    $(".js-tooltip").fadeOut();
                                }, 2500);
                            }, 200);

                            $(".js-cart-content").fadeIn();
                        } else {
                            console.log('Error');
                        }
                    },
                });
            }
        });

        // Selección de dirección - Paso 2
        $('.js-seleccionar-direccion').each(function() {
            var direccionId = $(this).find('input[name="direccionId"]').val();

            var direccionIdLocal = localStorage.getItem('direccionParaElPedido');    
            if (direccionIdLocal) {
                if (direccionId == direccionIdLocal) {
                    $(this).find('.js-usar').addClass('current');
                }
            }
            
            $(this).find('.js-usar').on('click', function(event) {
                localStorage.setItem('direccionParaElPedido', direccionId);        
                $('.js-usar').removeClass('current');
                $(this).addClass('current');
            });
        });

        // validar direccion en paso 2
        $('.js-validar-direccion').on('click', function(event) {
            event.preventDefault();

            var ruta = $(this).attr('href');

            if (!localStorage.getItem('direccionParaElPedido')) {
                $("#CargarDireccion").modal('show');
            } else {
                window.location = ruta;
            }
        });

        // Confirmar Compra
        $('.js-confirmar-compra').on('click', function(event) {
            event.preventDefault();
            var direccionDelPedido  = localStorage.getItem("direccionParaElPedido");
            var huertaDelPedido     = localStorage.getItem("IDHuertaLocal");

            var ruta = $(this).attr('href');
            var idPedido = "";

            // Ajax para destruir el carrito
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });

            $.ajax({
                url: ruta,
                type: 'POST',
                data: {
                    huertaDelPedido: huertaDelPedido,
                    direccionDelPedido: direccionDelPedido,
                },
                success: function(result) {
                    if (result['success'] == 'ok') {
                        localStorage.removeItem("nombreHuertaLocal");
                        localStorage.removeItem("direccionParaElPedido");
                        localStorage.removeItem("IDHuertaLocal");

                        idPedido = result['id_pedido']; 

                        window.location = "/carrito/verconfirmacion/" + idPedido;
                    } else {
                        console.log('Error');
                    }
                },
            });
        });
});

$(window).on('scroll', function() {
    // Header home
    var headerHome = $('.is-home');

    if ($(window).scrollTop() > 54) {
        $(headerHome).addClass('sticky');
        $(headerHome).addClass('sticky-header');
    } else {
        $(headerHome).removeClass('sticky');
        $(headerHome).removeClass('sticky-header');
    }
});

function GeocodingAdress() {
    // GEOCODING API -- Google maps para detalle de huerta
    if ($('.datos-info-huerta').length > 0) {
        var geocoder;
        var map;
        var address = $('.address').data('direccion');
        console.log(address);

        geocoder = new google.maps.Geocoder();

        var mapOptions = {
            zoom: 15,
        }

        map = new google.maps.Map(document.getElementById("map"), mapOptions);

        geocoder.geocode({
            'address': address
        }, function(results, status) {
            if (status == 'OK') {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: '../images/marker.png'
                });
            } else {
                console.log('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
}

// Carrito
function ConfirmarBorrado(event) {
    var confirmacion = confirm('Estas seguro?');
    if (!confirmacion) {
        return false;
    } else {
        return true;
    }
}

function ModalConfirm(callback) {

    $("#btn-confirm").on("click", function() {
        $("#confirmar-vaciar-carrito").modal('show');
    });

    $("#modal-btn-si").on("click", function() {
        callback(true);
        $("#confirmar-vaciar-carrito").modal('hide');
    });

    $("#modal-btn-no").on("click", function() {
        callback(false);
        $("#confirmar-vaciar-carrito").modal('hide');
    });
};