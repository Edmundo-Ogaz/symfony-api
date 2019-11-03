FROM kibatic/symfony:7.3

COPY . /var/www

RUN apt-get update
RUN apt-get install php-pgsql -y