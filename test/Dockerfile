FROM php:7.2.24-onbuild

EXPOSE 43010


WORKDIR /var/www/app/

COPY bin bin
COPY config config
COPY public public
COPY src src
COPY tests tests
COPY composer.json /var/www/app
COPY composer.lock /var/www/app
COPY symfony.lock /var/www/app
COPY .env.build .env
COPY init.sh /usr/local/bin/
COPY env.rc env.rc
COPY phpunit.xml.dist phpunit.xml.dist
COPY .env.test .env.test


RUN mkdir -p var/log && chmod -R 777 var/log/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN cd /var/www/app/ && composer global require hirak/prestissimo && composer install --no-progress --profile --optimize-autoloader

ARG image_tag
RUN echo $image_tag > config/build_image_tag

CMD /usr/local/bin/init.sh && php-fpm

