FROM php:8.0.2-apache

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt update \
    && apt install -y --no-install-recommends locales apt-utils unzip \
    git libicu-dev g++ libpng-dev \
    gnupg gnupg1 gnupg2 \
    libpq-dev libxml2-dev libzip-dev libonig-dev libxslt-dev;

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure intl && docker-php-ext-install intl
RUN docker-php-ext-install pdo pdo_mysql gd opcache intl zip calendar dom mbstring xsl
RUN pecl install xdebug-3.0.1 && docker-php-ext-enable xdebug
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get update && apt-get install -y yarn

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && dpkg-reconfigure -f noninteractive tzdata

WORKDIR /var/www