
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });


/* 
	AJAX de productos
	*/
	var productos = document.querySelectorAll('[data-id]');

	for (var i = 0; i < productos.length; i++) {
		productoSeleccionado = productos[i]
		productoSeleccionado.addEventListener('click', function() {

			var idProducto = this.getAttribute('data-id')




			fetch('/api/huerta/producto/' + idProducto)
			.then(response => response.json())
			.then(data => {

				var productName = document.querySelector('[data-product-name]')
				var productImage = document.querySelector('[data-product-image]')
				var productPrice = document.querySelector('[data-product-price]')
				var productDescription = document.querySelector('[data-product-description]')
				var productId = document.querySelector('[data-product-id]')
				var productUnidad = document.querySelector('[data-product-unidad-medida]')
				var productUnidad2 = document.querySelector('[data-product-unidad-medida2]')
				var productUnidad3 = document.querySelector('[data-product-unidad-medida3]')


				var unidadita = data.unidad_de_medida.unidad

				productName.innerHTML = data.producto
				productPrice.innerHTML = data.precio
				productDescription.innerHTML = data.descripcion
				productImage.setAttribute('src', '/storage/images/productos/' + data.foto)

				productId.setAttribute('value', idProducto)

				productUnidad.innerHTML = data.unidad_de_medida.unidad

				productUnidad2.setAttribute('value', unidadita)

				productUnidad3.innerHTML = data.unidad_de_medida.unidad

			})
			.then( response => $('#producto-detalle').modal('show') );
		})
	}

/* 
	Listado de categorias
	*/
// var categorias = document.querySelectorAll('[data-product-cateogry]');

// console.log(categorias[1])
// console.log(productos[1])

// for (var i = 0; i < categorias.length; i++) {
// 	categorias[i].addEventListener('click', function() {
// 		console.log('check')
// 	})
// }
