#Imagen base con Apache
FROM php:8.2-apache

#Instalamos extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

#Copiamos el codigo fuente al contenedor 
COPY . /var/www/html