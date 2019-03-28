FROM php:fpm-alpine
MAINTAINER Sonny Yu <sonnyyuirm@gmail.com>
RUN  apk add --upgrade --no-cache tzdata \
     && rm -rf /var/cache/apk/* /tmp/*
ENV  TZ=America/Los_Angeles