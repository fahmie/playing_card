# Gunakan imej rasmi PHP dengan Apache
FROM php:7.4-apache

# Salin fail projek ke direktori web Apache
COPY . /var/www/html/

# Aktifkan mod_rewrite kalau perlu
RUN a2enmod rewrite

# Salin config vhost
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Tetapkan permission
RUN chown -R www-data:www-data /var/www/html
