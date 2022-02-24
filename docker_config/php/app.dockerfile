FROM ubuntu:18.04

ENV OS_LOCALE="ja_JP.UTF-8" \
    DEBIAN_FRONTEND=noninteractive

ENV TZ=Asia/Ho_Chi_Minh
ENV LANG=ja_JP.UTF-8
ENV LANGUAGE=ja_JP:ja 
ENV LC_ALL=ja_JP.UTF-8

RUN apt-get update && apt-get install -y locales
RUN locale-gen ja_JP.UTF-8
RUN localedef -f UTF-8 -i ja_JP ja_JP.UTF-8

ENV PHP_RUN_DIR=/run/php \
    PHP_LOG_DIR=/var/log/php \
    PHP_CONF_DIR=/etc/php/7.3 \
    PHP_DATA_DIR=/var/lib/php

RUN \
    BUILD_DEPS='software-properties-common' \
    && dpkg-reconfigure locales \
    # Install common libraries
    && apt-get install --no-install-recommends -y $BUILD_DEPS \
    && add-apt-repository -y ppa:ondrej/php \
    && apt-get update \
    && apt-get install -y php7.3

# Install PHP libraries
# php7.3-mcrypt not support and move to PECL. Use extension Sodium: http://php.net/manual/book.sodium.php
RUN apt-get install -y curl \
    php7.3-common \
    php7.3-gd \
    php7.3-readline \
    php7.3-xsl \
    php7.3-apcu \
    php7.3-curl \
    php7.3-mailparse \
    php7.3-opcache \
    php7.3-redis \
    php7.3-mbstring \
    php7.3-yaml \
    php7.3-bcmath \
    php7.3-uuid \
    php7.3-zip \
    php7.3-bz2 \
    php7.3-xdebug \
    php7.3-cgi \
    php7.3-mysql \
    php7.3-cli \
    php7.3-fpm \
    php7.3-intl \
    php7.3-oauth \
    php7.3-sqlite \
    php7.3-xml

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && mkdir -p ${PHP_LOG_DIR} ${PHP_RUN_DIR} 

# Cleaning
RUN apt-get purge -y --auto-remove $BUILD_DEPS \
    && apt-get autoremove -y && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY ./docker_config/php/php-fpm.conf ${PHP_CONF_DIR}/fpm/php-fpm.conf
COPY ./docker_config/php/www.conf ${PHP_CONF_DIR}/fpm/pool.d/www.conf
COPY ./docker_config/php/php.ini ${PHP_CONF_DIR}/fpm/conf.d/custom.ini

RUN sed -i "s~PHP_RUN_DIR~${PHP_RUN_DIR}~g" ${PHP_CONF_DIR}/fpm/php-fpm.conf \
    && sed -i "s~PHP_LOG_DIR~${PHP_LOG_DIR}~g" ${PHP_CONF_DIR}/fpm/php-fpm.conf \
    && chown www-data:www-data ${PHP_DATA_DIR} -Rf

WORKDIR /var/www/html

EXPOSE 9000

# PHP_DATA_DIR store sessions
VOLUME ["${PHP_RUN_DIR}", "${PHP_DATA_DIR}"]
CMD ["/usr/sbin/php-fpm7.3"]