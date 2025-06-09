FROM php:7.4-fpm

RUN docker-php-ext-install mysqli

COPY ./web/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000
