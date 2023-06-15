<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Double
# Este paquete se encarga de contener toda la prueba Backend #2
# Pasos para instalacion del paquete "doubleapi"
1. Para instalar el proyecto debe descargarse el paquete completo "doubleapi" que se encuentra ubicado en este repositorio
2. Debe instarlar un cliente apache como Xampp, Laragon o wamp server
3. El paquete debe ser copiado dentro de la carpeta "htdocs" para el caso de Xampp o "www" para el caso de wamp
4. Abrir una consola y ubicarse dentro del path del proyecto "doubleapi"
6. Ejecutar la linea de comando "php artisan migrate" dentro del path anteriormente mencionado
7. Ejecutar la linea de comando "php artisan serve"
8. La levantarse el servidor con el comando anterior le indicará la ip o ruta local en la que esta cargando el proyecto debe copiar esta ruta en el campo de URL de postman para poder probar y ejecutar los servicios con GRAPHQL
9. Exportar la coleccion de servicios postman Prueba DVP
10. Configurar en la url de cada servicio de la coleccion la ip local anteriormente generada por el servidor al ejecutar el comando php artisan serve seguido de grapghql. Por ejemplo 127.0.0.1:8000//graphql
11. Antes de empezar a consumir los servicios debe insertar un usuario en la tabla Users de base de datos Laravel ya que la tabla tickes esta relacionada con la tabla Users, de no crear primero el usuario en la tabla Users no podra ver en funcionamiento los servicios
