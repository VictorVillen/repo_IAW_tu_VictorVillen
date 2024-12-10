FROM php:8.3.14-apache

RUN apt-get update && apt-get install -y mariadb-client && docker-php-ext-install mysqli

COPY ./build /var/www/html

RUN chown -R www-data:www-data /var/www/html

COPY ./build/script.sh /usr/local/bin/script.sh
RUN chmod +x /usr/local/bin/script.sh

ENTRYPOINT ["/usr/local/bin/script.sh"]
