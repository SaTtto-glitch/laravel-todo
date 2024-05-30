#!/bin/bash

# PHP-FPMの起動
php-fpm &

# nginxの起動
nginx -g 'daemon off;'
