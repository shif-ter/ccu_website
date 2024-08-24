# Use an official PHP image with FPM
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    unzip \
    npm \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www

# Copy the existing application directory contents
COPY . /var/www

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

# Install Node.js dependencies
RUN npm install

# Build frontend assets
RUN npm run build

# Generate Laravel application key
RUN php artisan key:generate

# Cache configurations, routes, and views
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Set correct permissions for the Laravel application
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

# Expose port 10000
EXPOSE 10000

# Start the Laravel development server
CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "10000"]
