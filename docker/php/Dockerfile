ARG PHP_VERSION
ARG PHP_COMPOSER_VERSION
ARG NODE_VERSION

FROM composer:${PHP_COMPOSER_VERSION} as composer
FROM node:${NODE_VERSION} as node
FROM php:${PHP_VERSION}-fpm

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node /usr/local/bin/node /usr/local/bin/node
COPY etc/php/php.ini /usr/local/etc/php/

RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm
RUN apt-get update \
    && apt-get install -y zip

ENV PATH $PATH:/root/.composer/vendor/bin

WORKDIR /var/www

RUN composer global require "laravel/installer"
RUN docker-php-ext-install pdo_mysql
