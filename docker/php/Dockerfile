# Stage 1: Composer
FROM composer:2.7 AS composer

WORKDIR /app

COPY composer.json ./
RUN composer install --no-interaction --prefer-dist --no-dev

# Stage 2: PHP Runtime
FROM php:8.3-cli-alpine

RUN apk add --no-cache git unzip

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-interaction --prefer-dist

CMD ["php", "-a"]
