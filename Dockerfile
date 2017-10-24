FROM ubuntu:16.04
RUN apt-get update && apt-get install -y \
        php7.0 \
        php7.0-mysql \
        php7.0-gd \
				php7.0-mbstring \
        php7.0-curl \
        git \
        zip \
        curl

EXPOSE 3000 3001 8080
