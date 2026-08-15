FROM php:8.3-apache

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

# Copia o Composer para dentro do container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define a pasta principal da aplicação
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY . .

# Instala as dependências do Laravel sem modo dev
RUN composer install --no-dev --optimize-autoloader

# Copia o .env e gera a chave
RUN cp .env.example .env
RUN php artisan key:generate

# Define permissões de pastas do Laravel
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache

# Ativa o módulo rewrite do Apache
RUN a2enmod rewrite

# Copia a configuração personalizada do Apache
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80