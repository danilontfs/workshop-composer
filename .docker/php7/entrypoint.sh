#!/bin/bash
if [ ! -d "vendor" ]; then
    composer global require hirak/prestissimo
    composer install
fi
php-fpm
