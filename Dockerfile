# Use official PHP image with Apache
FROM php:8.2-apache

# Copy your project files into the Apache directory
COPY . /var/www/html/

# Expose the port Render uses
EXPOSE 10000

# Run PHP's built-in web server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "/var/www/html"]
