# Radiko

## Instalación de laravel
Para instalar laravel debemos tener instalado en en nuestra PC [NodeJS](https://nodejs.org/es/)  y [Composer](https://getcomposer.org/download/). Una vez instalados podemos realizar los siguientes pasos:

1. Clonar el repositorio
2. Una vez que hayamos clonado el repositorio debemos correr 
```
composer install
```
3. Al terminar la instalación de laravel vamos al carpeta principal , buscarmos el archivo .env.example como template y usamos sus datos para crear el archivo .env en la misma ruta. Cuando tengamos el arvhivo .env creado corremos el siguiente comando para generar la key.
```
php artisan key:generate
```
4. Solo nos resta vincular las imagenes, para ello tenemos que generar un vinculo entre el storage y la carpeta pública.
Corremos el siguiente comando
```
php artisan storage:link
```
5. Las imagenes se encuentran dentro de la carpeta radiko-html/dist. Copiamos la carpeta images y pegamos en storage/app/public

6. Es posible que al momento de realizar una migración con la base de datos no arroje un error del tipo SQLSTATE[42000]. Para corregir este error tenemos que editar el achivo AppServiceProvider.php y colocar Schema::defaultStringLength(191);

```
public function boot()
{
	Schema::defaultStringLength(191);
}
```

## funciones últiles	
```
composer dump-autoload
php artisan make:migration
php artisan migrate
php artisan migrate:refresh
php artisan migrate:fresh
php artisan make:model 
php artisan make:seeder
php artisan db:seeder
php artisan make:controller
```


## Paquetes de terceros

* Paquete 1
* Paquete 2
* Paquete 3
* Paquete 4