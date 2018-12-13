FROM debian:stable-slim

COPY . /var/www/last-nine/
RUN apt-get update && \
    apt-get -y install nginx php-fpm php-gd php-xml php-curl php-json supervisor && \
    apt-get clean
COPY docker-helpers/supervisor/supervisord.conf /etc/supervisor/supervisord.conf
COPY docker-helpers/nginx/default /etc/nginx/sites-available/default
RUN sed -i 's|listen = /run/php/php7.0-fpm.sock|listen = /tmp/fpm.sock|g' /etc/php/7.0/fpm/pool.d/www.conf
RUN sed -i 's|pid = /run/php/php7.0-fpm.pid|pid = /tmp/fpm.pid|g' /etc/php/7.0/fpm/php-fpm.conf

CMD /usr/bin/supervisord