FROM webdevops/php-nginx-dev:7.3

RUN /usr/local/bin/apt-install iputils-ping
RUN apt-install nano
RUN composer global require hirak/prestissimo
