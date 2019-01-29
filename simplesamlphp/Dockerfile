FROM ubuntu:18.04

ARG DEBIAN_FRONTEND=noninteractive

# Install nginx server and php dependencies
RUN apt-get update -y \
    && apt-get install -y nginx \
    php \
    php-fpm \
    php-bcmath \
    php-date \
    php-dom \
    php-cli \
    php-json \
    curl \
    php-xml \
    php-curl \
    php-zip \
    php-gd \
    php-mbstring \
    php-intl \
    php-xmlrpc \
    php-ldap \
    locales \
    unzip \
    git \
    npm

RUN locale-gen en_AU.UTF-8

# Get Composer in order to install dependencies
RUN cd /usr/local/lib/ && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Download Simple SAML PHP and install dependencies from Composer and NPM
RUN cd /var && git clone https://github.com/simplesamlphp/simplesamlphp.git simplesamlphp
RUN cd /var/simplesamlphp && composer install && npm install && npm build

# Configure Simple SAML PHPcd 
RUN touch /var/simplesamlphp/modules/exampleauth/enable
# RUN mkdir /var/simplesamlphp/cert
# COPY authsources.php /simplesamlphp/config/authsources.php
COPY config.php /var/simplesamlphp/config/config.php
# COPY example.org.crt /simplesamlphp/cert/server.crt
# COPY example.org.pem /simplesamlphp/cert/server.pem
# COPY saml20-idp-hosted.php /simplesamlphp/metadata/saml20-idp-hosted.php

# Configure server
RUN rm /etc/nginx/sites-available/default
COPY nginx-site.conf /etc/nginx/sites-available/default

RUN rm /etc/nginx/nginx.conf
COPY nginx.conf /etc/nginx/nginx.conf

COPY php.ini /etc/php/7.2/fpm/php.ini

# Run the instance 
CMD service php7.2-fpm start && nginx
