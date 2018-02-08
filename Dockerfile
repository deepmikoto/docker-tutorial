FROM php:7.2-fpm

RUN apt-get update && apt-get install -y curl git zip unzip nano --no-install-recommends

RUN apt-get update \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get autoremove -y && apt-get clean && apt-get autoclean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY sf /var/www/tutorial

RUN usermod -u 1000 www-data
