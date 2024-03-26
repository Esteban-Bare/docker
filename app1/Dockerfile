# Use the official PHP image
FROM php:latest

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP script into the container
COPY index.php /var/www/html/

# Expose port 80 to allow external access
EXPOSE 80

# Command to run the PHP script
CMD ["php", "-S", "0.0.0.0:80", "index.php"]