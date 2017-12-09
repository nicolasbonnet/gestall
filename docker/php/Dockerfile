FROM php:5.6-apache
MAINTAINER Nicolas BONNET <nicolas.bonnet07@gmail.com>

#personnalization .bashrc
RUN echo 'alias ll="ls -alsh"' >> /root/.bashrc && \
echo 'alias ll="ls -alsh"' >> /root/.bashrc && \
echo 'alias pa="php artisan"' >> /root/.bashrc && \
echo 'alias par="php artisan routes"' >> /root/.bashrc && \
echo 'alias pam="php artisan migrate"' >> /root/.bashrc && \
echo 'alias pam:r="php artisan migrate:refresh"' >> /root/.bashrc && \
echo 'alias pam:roll="php artisan migrate:rollback"' >> /root/.bashrc && \
echo 'alias pam:rs="php artisan migrate:refresh --seed"' >> /root/.bashrc && \
echo 'alias pda="php artisan dumpautoload"' >> /root/.bashrc && \
echo 'alias cu="composer update"' >> /root/.bashrc && \
echo 'alias ci="composer install"' >> /root/.bashrc && \
echo 'alias cda="composer dump-autoload -o"' >> /root/.bashrc

#update conteneur
RUN apt-get update && apt-get upgrade -y && apt-get dist-upgrade -y

#install tools
RUN docker-php-ext-install pdo_mysql mysqli
RUN apt-get install -y curl git vim
#install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#config php &&
COPY ./yourhost.com.conf  /etc/apache2/sites-available/
COPY php.ini /usr/local/etc/php/
RUN a2enmod rewrite

#install xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_host = 192.168.13.20" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_port = 9000" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_handler = dbgp" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_mode = req" >> /usr/local/etc/php/php.ini

#install nodejs to manage javascript tools (elexir, gilpjs ...)
RUN apt-get install -y nodejs npm

#VOLUME /var/www/html
#add right to host to write files
RUN usermod -u 1000 www-data
RUN chown -R 1000:www-data /var/www/html

RUN service apache2 restart
WORKDIR /var/www/html
RUN a2ensite yourhost.com.conf 