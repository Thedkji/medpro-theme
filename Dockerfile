FROM php:8.3.4-fpm

RUN apt-get update && apt-get install -y libzip-dev unzip

RUN docker-php-ext-install zip

COPY . /var/www

WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

CMD ["php-fpm"]