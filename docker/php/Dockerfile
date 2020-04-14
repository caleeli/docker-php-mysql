ARG php_version

FROM php:${php_version}

RUN curl --location https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-english.tar.gz | tar xvz \
	&& mv phpMyAdmin* ../mysql

RUN apt-get update && apt-get install -y \
	libmcrypt-dev \
	libzip-dev zip libpng-dev

RUN apt-get update && apt-get install -y libc-client-dev libkrb5-dev && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install imap

RUN docker-php-ext-install mysqli pdo pdo_mysql mbstring zip gd
RUN pecl install xdebug-2.9.4 \
	&& docker-php-ext-enable xdebug
RUN pecl install mcrypt-1.0.3 \
	&& docker-php-ext-enable mcrypt

RUN apt-get install -y git

RUN ssh-keygen -q -t rsa -N '' -f /root/.ssh/id_rsa

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite
RUN a2enmod expires
RUN a2enmod rewrite

COPY ["sites.conf", "/etc/apache2/sites-enabled/sites.conf"]
COPY ["php.ini", "/usr/local/etc/php/conf.d/php.ini"]
COPY ["config.inc.php", "/var/www/mysql/config.inc.php"]

RUN echo "===============================" \
	&& cat /root/.ssh/id_rsa.pub \
	&& echo "==============================="
