FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    zip \
    unzip \
    git

RUN docker-php-ext-install pdo pdo_sqlite

WORKDIR /var/www

COPY . .

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader --no-scripts

# إعطاء صلاحية التشغيل لملف الـ entrypoint
RUN chmod +x /var/www/entrypoint.sh

EXPOSE 10000

ENTRYPOINT ["/var/www/entrypoint.sh"]