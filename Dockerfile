# Use PHP with Apache preinstalled
FROM php:8.2-apache

# Enable common PHP extensions (important for MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files to Apache root
COPY . /var/www/html/

# Expose the Render port (Render expects your app to listen on $PORT)
EXPOSE 10000

# Start Apache on Render's dynamic port
CMD ["bash", "-c", "apache2-foreground"]
