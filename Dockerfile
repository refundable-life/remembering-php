FROM php:8.0.0-apache

COPY . /var/www/html

# # Update apt
RUN apt-get update
# RUN apt-get install libcurl4 libcurl4-openssl-dev libzip-dev libpq-dev libpng-dev libfreetype6-dev libxml2-dev -y

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Extensions
# RUN docker-php-ext-install pcntl opcache zip

# Install GPRC for Firestore
RUN apt-get install g++ zlib1g-dev -y
RUN pecl install grpc
RUN docker-php-ext-enable grpc

COPY ./docker/php.ini /usr/local/etc/php/conf.d/

# Apache
RUN a2enmod rewrite
COPY ./docker/000-default.conf /etc/apache2/sites-available/000-default.conf

# Remove dev composer packages
RUN composer install --optimize-autoloader --no-dev
RUN composer dump-autoload
