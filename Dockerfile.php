FROM php:5.6-apache

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN a2enmod rewrite

# Installez l'extension MySQLi
RUN docker-php-ext-install pdo pdo_mysql mysqli

WORKDIR /var/www/html

# Copiez le fichier connect.php dans le conteneur
COPY ./www /var/www/html/

RUN sed -i 's/Require all denied/Require all granted/' /etc/apache2/apache2.conf
RUN chmod -R 777 /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Définissez les variables d'environnement
ENV DB_NAME=gestion_produits \
    DB_USER=admin \
    DB_PASSWORD=password \
    DB_HOST=db \
    DB_PORT=3306

EXPOSE 80

CMD ["apache2-foreground"]
