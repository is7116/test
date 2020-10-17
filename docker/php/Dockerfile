FROM php:7.4-fpm-alpine

WORKDIR /app

RUN apk add bash
RUN apk add libzip-dev && docker-php-ext-install zip


CMD ["php-fpm"]

EXPOSE 9000