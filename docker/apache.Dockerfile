FROM php:8.5-apache as vb-apache
COPY ./my-apache2.conf /etc/apache2/apache2.conf
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
RUN service apache2 restart
