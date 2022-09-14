FROM php:7.4-fpm

RUN rm /usr/local/etc/php/php.ini-*

COPY ./.docker/web/php.ini /usr/local/etc/php/php.ini

WORKDIR /code
