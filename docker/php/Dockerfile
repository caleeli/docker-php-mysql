ARG php_version

FROM php:${php_version}

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
RUN a2enmod expires
RUN a2enmod rewrite

COPY ["sites.conf", "/etc/apache2/sites-enabled/sites.conf"]
