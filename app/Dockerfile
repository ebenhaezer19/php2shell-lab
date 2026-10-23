ARG PHP_TAG
FROM php:${PHP_TAG}

# Alat observasi di dalam container target
RUN apt-get update && apt-get install -y --no-install-recommends \
        tcpdump procps curl \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY index.php upload.php ./

# Log PHP verbose, error ke file agar bisa diinspeksi
RUN echo "log_errors=On\nerror_log=/var/log/php/error.log\ndisplay_errors=Off" \
        > /usr/local/etc/php/conf.d/lab.ini \
    && mkdir -p /var/log/php && chown www-data:www-data /var/log/php

EXPOSE 80