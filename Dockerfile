# Use the official PHP image as a base image
FROM php:8.2-fpm

# Install necessary dependencies
RUN apt-get update -y && apt-get install -y \
    zip \
    unzip \
    git \
    nodejs \
    npm \
    libonig-dev \
    && docker-php-ext-install mbstring

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /app

# Copy the application code
COPY . /app

# Install PHP dependencies
RUN composer install

# Install Node.js dependencies and build assets with Vite
RUN npm install
RUN npm run build

# Expose the port 8000
EXPOSE 8000

# Default command
CMD php artisan serve --host=0.0.0.0 --port=8000
