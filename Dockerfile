FROM wyveo/nginx-php-fpm:php74
RUN chown -R www-data:www-data /usr/share/nginx
RUN chmod -Rvc 777 /usr/share/nginx
RUN cd /usr/share/nginx 