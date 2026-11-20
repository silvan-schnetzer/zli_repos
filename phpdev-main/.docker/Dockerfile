ARG PHP_VERSION=8.5

FROM php:${PHP_VERSION}-cli

ARG PHPUNIT_VERSION=12
ARG PHPCS_VERSION=4.0.4
ARG PHPSTAN_VERSION=2.3.5
ARG PHPDOC_VERSION=3.10.0

ENV DEBIAN_FRONTEND=noninteractive \
    COMPOSER_ALLOW_SUPERUSER=1 \
    LC_ALL=C.UTF-8 \
    TZ=UTC \
    XDEBUG_CLIENT_HOST=localhost

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        ca-certificates \
        curl \
        git \
        unzip \
        msmtp \
        msmtp-mta \
    && rm -rf /var/lib/apt/lists/*

COPY --from=mlocati/php-extension-installer:2 /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions \
        bcmath \
        gd \
        intl \
        mysqli \
        opcache \
        pdo_mysql \
        sockets \
        zip \
        xdebug

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

ADD --chmod=755 https://phar.phpunit.de/phpunit-${PHPUNIT_VERSION}.phar /usr/local/bin/phpunit
ADD --chmod=755 https://github.com/PHPCSStandards/PHP_CodeSniffer/releases/download/${PHPCS_VERSION}/phpcs.phar /usr/local/bin/phpcs
ADD --chmod=755 https://github.com/PHPCSStandards/PHP_CodeSniffer/releases/download/${PHPCS_VERSION}/phpcbf.phar /usr/local/bin/phpcbf
ADD --chmod=755 https://github.com/phpstan/phpstan/releases/download/${PHPSTAN_VERSION}/phpstan.phar /usr/local/bin/phpstan
ADD --chmod=755 https://github.com/phpDocumentor/phpDocumentor/releases/download/v${PHPDOC_VERSION}/phpDocumentor.phar /usr/local/bin/phpdoc

RUN phpcs --config-set default_standard PSR12 \
    && phpcs --config-set colors 1 \
    && phpcs --config-set report_width 120

RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini" \
    && mkdir -p /var/log/php
COPY .docker/php/zz-dev.ini $PHP_INI_DIR/conf.d/zz-dev.ini
COPY .docker/msmtprc /etc/msmtprc

RUN php -v && composer --version && phpunit --version && phpcs --version \
    && phpstan --version && phpdoc --version

WORKDIR /opt/code
EXPOSE 8888

HEALTHCHECK --interval=30s --timeout=3s --start-period=5s \
    CMD php -r 'exit(@fsockopen("127.0.0.1", 8888) ? 0 : 1);'

CMD ["php", "-S", "0.0.0.0:8888", "-t", "/opt/code"]
