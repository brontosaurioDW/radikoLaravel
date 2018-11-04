# Radiko

## Instalación de laravel
Para comenzar con la instalación de laravel debemos tener instalado en en nuestra PC [NodeJS](https://nodejs.org/es/)  y [Composer](https://getcomposer.org/download/). 

Una vez instalados podemos  vamos a la carpeta principal del proyecto (donde se encuentra el index.php), abrimos la consola de comandos y corremos la instalacion de composer.
```
composer install
```
Ahora necesitamos establecer nuestro archivo de configuración. Para ello vamos a la carpeta principal del proyecto, buscamos el archivo _.env.example_ y lo usamos como base para crear _.env_.
Una véz creado el archivo generamos la clave de seguridad.

```
php artisan key:generate
```
Solo queda copiar la carpeta images dentro de _radiko-html/dist_ y pegarla en _storage/app/public_ y vincular el storage con la carpeta public.
```
php artisan storage:link
```

## Base de datos

Es posible que al momento de realizar una migración con la base de datos no arroje un error del tipo SQLSTATE[42000]. Para corregir este error tenemos que editar el achivo _AppServiceProvider.php_ y colocar _Schema::defaultStringLength(191);_ dentro de la funccion boot().

```php
public function boot()
{
	Schema::defaultStringLength(191);
}
```

## funciones últiles	

composer dump-autoload
php artisan make:migration
php artisan migrate
php artisan migrate:refresh
php artisan migrate:fresh
php artisan make:model 
php artisan make:seeder
php artisan db:seeder
php artisan make:controller


## Paquetes de terceros

* barryvdh/laravel-debugbar
* Paquete 2
* Paquete 3
* Paquete 4