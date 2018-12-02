
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

var productos = document.querySelectorAll('[data-id]');

for (var i = 0; i < productos.length; i++) {
	productoSeleccionado = productos[i]
	productoSeleccionado.addEventListener('click', function() {

		var idProducto = this.getAttribute('data-id')

		fetch('/api/huerta/producto/' + idProducto)
		.then(respuesta => respuesta.json())
		.then(data => {
			console.log("Data: ", data)

		var productName = document.querySelector('[data-product-name]')
		var productImage = document.querySelector('[data-product-image]')
		var productDescription = document.querySelector('[data-product-description]')

		productName.innerHTML = data.producto
		productDescription.innerHTML = data.descripcion
		productImage.setAttribute('src', 'http://localhost:8000/storage/images/productos/' + data.foto)

		});
	})
}

