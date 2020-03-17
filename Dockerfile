FROM php:7.4.3-fpm

RUN apt-get update \
    && apt-get install -y zip unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html