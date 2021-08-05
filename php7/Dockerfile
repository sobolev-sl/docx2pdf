#FROM php:7.4-fpm-alpine
FROM php:7.4-fpm-alpine3.13

RUN apk update \
    && apk add  --no-cache git curl libmcrypt libmcrypt-dev openssh-client icu-dev \
    libxml2-dev freetype-dev libpng-dev libjpeg-turbo-dev g++ make autoconf zip libzip-dev \
    && docker-php-ext-install zip \
    && docker-php-source extract \
    && docker-php-source delete \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /tmp/*

RUN apk add libreoffice
RUN apk add --no-cache msttcorefonts-installer fontconfig
RUN update-ms-fonts

WORKDIR "/var/www/project"

EXPOSE 9000
