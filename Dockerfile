FROM php:8.3-fpm

ENV APP_KEY=base64:AqvISKrye30LVrH7hry43tnm4ExFYj8ue32YunFEolE=

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

WORKDIR /var/www/html

COPY . .

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

# Install npm dependencies and build assets
RUN npm install && npm run build

RUN composer install


RUN chown -R www-data:www-data /var/www/html

USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
