<p align="center"><img src="https://raw.githubusercontent.com/gutitrombotto/partida-ficha-digital/master/public/images/logo_partida_small.png"></p>

# Movimiento Partida - Ficha Digital

## Sobre el Proyecto

Esta aplicación busca simplificar el funcionamiento y la gestión de la presentación de jovenes al Movimiento Partida.
Algunas de las funcionalidades son:
- Completar informacion de la ficha de presentacion directamente en la web.
- Carga de datos de padrinos anteriormente cargada.
- Facilitar codigos de venta de fichas.
- Administración de los datos de cada presentación por parte del Secretariado.
- Mantener una base de datos historica de los miembros del movimiento.

## Sobre el Software

La aplicación está basada en dos principales frameworks:
- [Laravel 5.5](https://laravel.com/docs/5.5/): framework de backend, basado en php7.* con base de datos mysql.
- [Vue 2.0](https://vuejs.org/v2/guide/): framework de frontend. De facil uso y de gran potencial

## ¿Como Instalar la aplicación para desarrollo?

Para correr la aplicación se debe tener instalado un webserver, base de datos mysql, composer (gesto de paquetes de php), npm (gestor de paquetes de frontend).
Se recomienda la instalación de la maquiena virtual [Homestead](https://laravel.com/docs/5.5/homestead) que cuenta con todo lo necesario para el desarrollo. Por cualquier error consultar al encargado de la app.

Una vez instalado Homestead se debe realizar a los siguientes pasos:
- Clonar Repositorio
- Instalar dependecias de php: composer install
- Crear archivo .env con la informacion necesarioa (cambiar la establecida por defecto si fuera necesario)
- Crear key de la aplicaccion: php artisan key:generate
- Correr migraciones: php artisan migrate
- Instalar pquestes de node: npm install
- Compilar javascript: npm run watch-poll

Si tiene algún inconveniente enviar un email a gutitrombotto@gmail.com

