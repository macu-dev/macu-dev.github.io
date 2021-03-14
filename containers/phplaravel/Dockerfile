FROM wyveo/nginx-php-fpm

MAINTAINER febef.dev@gmail.com

RUN rm -rf /usr/share/nginx/html ;\
    apt update ;\
    apt upgrade ;\
    apt install -y vim;\
    apt-get clean --dry-run; \
    sed -i 's;try_files $uri $uri/ =404;try_files $uri $uri/ /index.php;' /etc/nginx/conf.d/default.conf; \
    sed -i 's;/usr/share/nginx/html;/app/public;' /etc/nginx/conf.d/default.conf; \
    mkdir /app/ ; #\
    #echo '<?php echo "holamundo" ; ?>' > /app/index.php;

ADD public /app
