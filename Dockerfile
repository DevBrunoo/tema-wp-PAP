
FROM wordpress:latest

COPY php.ini /usr/local/etc/php/

RUN echo "upload_max_filesize = 100M" >> /usr/local/etc/php/php.ini