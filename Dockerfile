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

# إنشاء قاعدة البيانات وتنفيذ الـ Seeds أثناء الـ Build نفسه
RUN touch database/database.sqlite && php artisan migrate:fresh --seed --force

EXPOSE 10000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]