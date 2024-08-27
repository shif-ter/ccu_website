# Dockerfile
FROM php:8.2-fpm

# Installer les dépendances nécessaires
RUN apt-get update -y && apt-get install -y \
    libmcrypt-dev \
    libpq-dev \
    libonig-dev \
    zip \
    unzip \
    git \
    nodejs \
    npm

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les extensions PHP
RUN docker-php-ext-install pdo mbstring

# Configurer le répertoire de travail
WORKDIR /app
COPY . /app

# Installer les dépendances du projet via Composer
RUN composer install

# Installer les dépendances Node.js et construire les assets avec Vite
RUN npm install
RUN npm run build

# Exposer le port 8000
EXPOSE 8000

# Commande par défaut
CMD php artisan serve --host=0.0.0.0 --port=8000
