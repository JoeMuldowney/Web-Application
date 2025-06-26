# Use PHP with Apache
FROM php:8.2-apache

# Set Apache root to public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache config for new document root
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Enable .htaccess support
RUN a2enmod rewrite

# Install PDO and MySQL driver
RUN docker-php-ext-install pdo pdo_mysql

# Copy everything
COPY . /var/www/html