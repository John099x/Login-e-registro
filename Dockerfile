FROM php:8.2-apache
RUN docker-php-ext-install mysqli
COPY . /var/www/html/
RUN a2dismod mpm_event && a2enmod mpm_prefork
EXPOSE 80