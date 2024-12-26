FROM php:8.3-apache

RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y --no-install-recommends git && \
    docker-php-ext-install -j$(nproc) pdo_mysql && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer