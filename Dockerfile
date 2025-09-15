# Imagen base con PHP y Apache
FROM php:8.2-apache

# Habilitar módulos necesarios de Apache y PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli pdo pdo_mysql

# Copiar los archivos del proyecto al directorio raíz de Apache
COPY . /var/www/html/

# Dar permisos correctos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80 para Render
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
