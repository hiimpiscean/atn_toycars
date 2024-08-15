FROM php:7.3

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring 
WORKDIR /app
COPY . /app
RUN composer update

CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181
