# Development-ready PHP-FPM container.

ARG php_version
FROM php:7.2-fpm

ARG php_xdebug_version

RUN apt-get update \
        && apt-get install -y autoconf gcc \
        && pecl install xdebug-${php_xdebug_version} \
        && docker-php-ext-enable xdebug \
        && apt-get purge -y autoconf gcc \
        && rm -rf /var/lib/apt/lists/*
# COPY ./images/php-fpm/xdebug.ini $PHP_INI_DIR/conf.d/moodle-xdebug.ini
