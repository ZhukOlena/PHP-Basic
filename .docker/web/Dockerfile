FROM php:7.4-fpm

RUN \
   docker-php-ext-install pdo pdo_mysql

RUN rm /usr/local/etc/php/php.ini-*

COPY ./.docker/web/php.ini /usr/local/etc/php/php.ini

WORKDIR /code
