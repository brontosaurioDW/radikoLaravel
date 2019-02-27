@extends ('layouts.master')
@section ('title', 'Radiko')
@section ('header-class', 'is-home')
@section ('content')

<div class="main-wrapper relative">
	{{-- HERO - SEARCH --}}
	@include ('home.buscador')

	{{-- CATEGORIAS --}}
	@include ('home.categorias')

	{{-- DESTACADOS --}}
	@include ('home.destacados')

	{{-- BANNER 'SUSCRIBITE' --}}
	@include ('home.suscribite-banner')

	{{-- BLOQUES FONDO VIOLETAS --}}
	@include ('home.bloques-violetas')

	{{-- DESCARGA LA APP  --}}
	@include ('home.descarga-app')
</div>

<!-- Modal -->
<div class="modal fade" id="confirmar-vaciar-carrito" tabindex="-1" role="dialog" aria-labelledby="confirmVaciarCarrito" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content block">
            <div class="modal-body confirm-modal">
                <button type="button" class="closes" data-dismiss="modal" aria-label="Close">
                    <i class="far fa-times"></i>
                </button>
                <p>Estás ingresando a otra huerta y tu canasta ya tiene productos de <span id="nombre-huerta-actual-modal"></span></p>
                <p>Si continuás con esta huerta se vaciará la canasta. ¿Continuamos?</p>
                
                <div class="buttons justify-content-center d-flex align-items-center" role="group" aria-label="Confirm modal">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <button type="button" class="btn btn-primary btn-small" id="modal-btn-si">Vaciar canasta</button>
                    <a class="link d-block" id="modal-btn-no" data-dismiss="modal" aria-label="Close">Continuar mi compra</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection