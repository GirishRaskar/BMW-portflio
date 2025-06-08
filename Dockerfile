# Use official PHP with Apache
FROM php:8.1-apache

# Enable Apache mod_rewrite (important for CodeIgniter clean URLs)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

# Copy everything from your project into the container
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Allow .htaccess overrides for Apache
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html|' /etc/apache2/sites-available/000-default.conf && \
    echo '<Directory /var/www/html/>\n\
    AllowOverride All\n\
</Directory>' >> /etc/apache2/apache2.conf
