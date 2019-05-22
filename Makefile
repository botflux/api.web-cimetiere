.PHONY=install

PHP_CLI=/usr/bin/php7.1-cli
PHP=/usr/bin/php7.1
COMPOSER=~/composer.phar

install:
	rm .env
	cat .env.local >> .env
	$(PHP_CLI) $(COMPOSER) install --no-dev --optimize-autoloader
	APP_ENV=prod APP_DEBUG=0 $(PHP_CLI) bin/console cache:clear