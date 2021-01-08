FROM php:8.0.0-fpm-alpine

# Installing XDebug. Note the xdebug version number and
# update in future if required!
RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \ 
  && pecl install xdebug-3.0.2 \
  && docker-php-ext-enable xdebug \
  && apk del pcre-dev ${PHPIZE_DEPS}

WORKDIR /usr/local/etc/php

RUN cp php.ini-development php.ini

RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.discover_client_host=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini 

# Lumen needs write access to write to log files
RUN chmod -R 777 /var/www/html/app/storage