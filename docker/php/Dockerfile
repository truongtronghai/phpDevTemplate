# Use the official PHP image with FPM and Alpine Linux
FROM php:8.1-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    bash \
    git \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mbstring pdo pdo_mysql xml

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY ./src .

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
