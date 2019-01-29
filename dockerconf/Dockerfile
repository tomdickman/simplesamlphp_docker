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

# Download Simple SAML PHP from git repo
RUN cd /var && git clone https://github.com/simplesamlphp/simplesamlphp.git simplesamlphp
# Copy all template config and metadata across
RUN cp -r /var/simplesamlphp/config-templates/* /var/simplesamlphp/config/
RUN cp -r /var/simplesamlphp/metadata-templates/* /var/simplesamlphp/metadata/
# Install dependencies from Composer and NPM
RUN cd /var/simplesamlphp && composer install && npm install && npm build

# Allow simpleSAMLphp to work as idP
RUN touch /var/simplesamlphp/modules/exampleauth/enable
# Copy across config
RUN rm -fr /var/simplesamlphp/config/authsources.php
COPY authsources.php /var/simplesamlphp/config/authsources.php
RUN rm -fr /var/simplesamlphp/config/config.php
COPY config.php /var/simplesamlphp/config/config.php
# Copy across our certificates
RUN mkdir /var/simplesamlphp/cert
COPY example.org.crt /var/simplesamlphp/cert/server.crt
COPY example.org.pem /var/simplesamlphp/cert/server.pem
# Copy across idP and SP configurations
COPY saml20-idp-hosted.php /var/simplesamlphp/metadata/saml20-idp-hosted.php
COPY saml20-sp-remote.php /var/simplesamlphp/metadata/saml20-sp-remote.php

# Configure server
RUN rm /etc/nginx/sites-available/default
COPY nginx-site.conf /etc/nginx/sites-available/default

RUN rm /etc/nginx/nginx.conf
COPY nginx.conf /etc/nginx/nginx.conf

COPY php.ini /etc/php/7.2/fpm/php.ini

# Run it all
CMD service php7.2-fpm start && nginx
