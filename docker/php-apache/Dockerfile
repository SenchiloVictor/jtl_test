FROM php:7.4-apache

RUN apt-get -y update \
    && apt-get install -y libicu-dev libzip-dev zip libpng-dev libxml2-dev \
    && apt-get install -y libmagickwand-dev --no-install-recommends \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install zip \
    && docker-php-ext-install gd \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install soap \
    && pecl install imagick \
    && docker-php-ext-enable imagick

RUN a2enmod rewrite

COPY conf.d/* $PHP_INI_DIR/conf.d/
COPY sites-available/* /etc/apache2/sites-available