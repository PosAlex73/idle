FROM php:8.1-fpm

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions intl opcache pdo_mysql readline soap sockets tokenizer xsl zip gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
