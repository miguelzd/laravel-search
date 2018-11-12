<p  align="center"><img  src="https://laravel.com/assets/img/components/logo-laravel.svg" width="50%"  alt="Logo-Laravel">
</p>

<p  align="center">
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/full-logo-min.png" width="50%"  alt="Logo-Laravel-Collective">
</p>

</hr>

<p  align="center">
<a  href="https://travis-ci.org/laravel/framework"><img  src="https://travis-ci.org/laravel/framework.svg"  alt="Build Status"></a><a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/d/total.svg"  alt="Total Downloads"></a><a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/v/stable.svg"  alt="Latest Stable Version"></a><a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/license.svg"  alt="License"></a>

</p>
  
# Buscador de Usuarios  
### Laravel 5.7 + Laravel Collective

Sencillo buscador de usuarios por Nombre, Email y Biográfica, ajustando la condición de búsqueda según el campo completado.

## Links de referencias y paquetes utilizados

 - https://laravelcollective.com/
  

## composer.json

```
"php": "^7.1.3",
"fideloper/proxy": "^4.0",
"laravel/framework": "5.7.*",
"laravel/tinker": "^1.0",
"laravelcollective/html": "^5.7",
```

NOTA: Recuerda tener instalado Composer para descargar las dependencias del proyecto. 


## Instalación

1. Descarga el proyecto https://github.com/miguelzd/blog.git a tu equipo local.

2. Instala las dependencias y  plugins utilizando Composer.
```
composer install
```
3. Crea el archivo "**.env**" y luego genera la "**key**" de la aplicación desde la consola.
```
php artisan key:generate
```
4. Crea la base de datos llamada "**laravel-search**" en tu servidor **MySQL** y configurarla en el archivo "**.env**" del proyecto.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-search
DB_USERNAME=root
DB_PASSWORD=
```
5. Por último, ejecuta las "**migraciones**" y los **seeders** para crear las tablas y los datos a utilizar.
```
php artisan migrate:refresh --seed
```

## Ejecución

Accede al directorio del proyecto  y ejecuta el servidor de desarrollo desde la consola con el comando **"php artisan serve"**
```
➜  blog git:(master) ✗ php artisan serve
...
Laravel development server started: <http://127.0.0.1:8000>
```
 

## Screenshots

  
#### Index
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-search/cap-1-min.png"  width="100%">


## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).