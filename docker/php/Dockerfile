ARG php_version

FROM php:${php_version}

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN pecl install xdebug-2.9.4 \
	&& docker-php-ext-enable xdebug

RUN a2enmod rewrite
RUN a2enmod expires
RUN a2enmod rewrite

COPY ["sites.conf", "/etc/apache2/sites-enabled/sites.conf"]
COPY ["php.ini", "/usr/local/etc/php/conf.d/php.ini"]
