FROM php:7.2-apache
COPY sample.db /tmp
COPY index.php /var/www/html/
