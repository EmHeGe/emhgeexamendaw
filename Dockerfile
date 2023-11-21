FROM php:8-apache
# Instalar extensiones y dependencias
RUN apt-get update
RUN docker-php-ext-install mysqli