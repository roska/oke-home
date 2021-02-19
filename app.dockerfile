FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
  curl \
  git \
  gnupg \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libonig-dev \
  libpng-dev \
  libmagickwand-dev \
  libxslt1-dev \
  locales \
  libzip-dev \
  unzip \
  zlib1g-dev

RUN pecl install imagick

RUN docker-php-ext-install exif && \
  docker-php-ext-enable exif && \
  docker-php-ext-enable imagick && \
  docker-php-ext-configure gd --with-freetype=/usr/include/ \
  --with-jpeg=/usr/include/ && \
  docker-php-ext-configure mbstring --enable-mbstring && \
  docker-php-ext-install bcmath gd opcache pdo_mysql xml xsl zip mbstring

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chown -R www-data:www-data /var/www
