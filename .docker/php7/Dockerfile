FROM php:7.4.0-fpm

RUN apt-get update

RUN apt-get install -y \
        git \
        libzip-dev \
        unzip \
        && docker-php-ext-install zip

# BAIXA O COMPOSER
RUN curl https://getcomposer.org/composer.phar --output /usr/bin/composer

# PERMISSÃO NA PASTA COMPOSER
RUN chmod +x /usr/bin/composer

# DIRETÓRIO DE EXECUÇÃO
WORKDIR /php7

# SCRIPT DE INICIALIZAÇÃO
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
ENTRYPOINT ["sh","/usr/local/bin/entrypoint.sh"]
