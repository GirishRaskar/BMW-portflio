# Base image with PHP and Apache
FROM php:8.1-apache

# Install dependencies and enable PHP intl extension
RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-install intl

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

# Copy app source
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Update Apache config to allow .htaccess overrides
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html|' /etc/apache2/sites-available/000-default.conf && \
    echo '<Directory /var/www/html/>\n\
    AllowOverride All\n\
</Directory>' >> /etc/apache2/apache2.conf
