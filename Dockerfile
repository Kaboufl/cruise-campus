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

# Run npm run build to build the assets from the nodeJS docker image
COPY --from=node:latest /usr/local/bin/node /usr/local/bin/node
COPY --from=node:latest /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node:latest /usr/local/include/node /usr/local/include/node

RUN npm install
RUN npm run build

RUN composer install


RUN chown -R www-data:www-data /var/www/html

USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
