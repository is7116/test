FROM php:7.4-fpm-alpine

WORKDIR /app

RUN apk add bash
RUN docker-php-ext-install pdo_mysql

CMD ["php-fpm"]

EXPOSE 9000