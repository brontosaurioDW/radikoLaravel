<section class="hero search d-flex align-items-center bg-trama">
    <div class="container">
        <h2 class="logo">
            <span class="sr-only">Bienvenidos a Rádiko</span>
        </h2>
        
        <div class="form">            
            <form action="{{ route('huertas.search') }}" method="get">
                <div class="row-search form-row justify-content-center relative">
                    <input type="text" name="search" id="search" placeholder="¿Qué estás buscando?">
                    <a href="#" class="btn-search">
                        <span class="sr-only">Search</span>
                        <i class="far fa-search"></i>
                    </a>
                </div>
            </form>
        </div>

{{--         <div class="form">
            <form action="resultado-de-busqueda.html" id="form-index">
                <div class="row-search form-row justify-content-center relative">
                    <input type="text" name="search" placeholder="¿Qué estás buscando?">
                    <a href="resultado-de-busqueda.html" class="btn-search">
                        <span class="sr-only">Search</span>
                        <i class="far fa-search"></i>
                    </a>
                </div>
            </form>
        </div> --}}

    </div>
</section>