FROM php:8.2-fpm

# Instalar extensões do sistema e do PHP, incluindo PostgreSQL
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libpq-dev \
 && docker-php-ext-configure zip \
 && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar arquivos da aplicação Laravel
COPY . .

# Instalar dependências do Laravel
RUN composer install --optimize-autoloader --no-dev


RUN php artisan migrate --force

# Garantir que os diretórios existem antes do chown
RUN mkdir -p storage bootstrap/cache \
 && chown -R www-data:www-data storage bootstrap/cache

# Expor a porta 8000
EXPOSE 8000

# Comando para iniciar o servidor embutido do Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
