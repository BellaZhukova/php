FROM php:8.3.0-fpm-bookworm
WORKDIR /var/www
RUN apt update && apt install -y \
    vim \
    bash \
    curl \
    git

RUN docker-php-ext-install pdo pdo_mysql pcntl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer