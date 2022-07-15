FROM php:8.1-apache

#RUN docker-php-ext-install pdo pdo_mysql

COPY apache.conf /etc/apache2/apache2.conf

ENV APACHE_DOCROOT_IN_REPO="src"
ENV APACHE_LOG_DIR="/var/log/apache2"
