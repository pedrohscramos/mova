FROM php:latest
WORKDIR /var/www/html
COPY . /var/www/html
CMD ["php", "-S", "0.0.0.0:80"]