FROM php:8.1.3-fpm
MAINTAINER Maksim Emelyanov <emelyanovmax@gmail.com>

# Install system dependencies
RUN apt-get update && apt-get install -y git vim nano

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
