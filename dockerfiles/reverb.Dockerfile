FROM php:8.3-fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql

RUN docker-php-ext-configure pcntl --enable-pcntl \
  && docker-php-ext-install \
    pcntl

WORKDIR /var/www/laravel

RUN composer require laravel/reverb:@beta

EXPOSE ${PORT}

CMD php artisan reverb:install && php artisan reverb:start --port=${PORT} --debug