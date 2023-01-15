start:
	./vendor/bin/sail up -d

stop:
	./vendor/bin/sail down

restart:
	./vendor/bin/sail down
	./vendor/bin/sail up
	./vendor/bin/sail build

rebuild:
	./vendor/bin/sail down
	./vendor/bin/sail build
	./vendor/bin/sail up

composer-install:
	./vendor/bin/sail composer install

composer-update:
	./vendor/bin/sail composer update

composer-require:
	./vendor/bin/sail composer require ${PACKAGE}

composer-require-dev:
	./vendor/bin/sail composer require --dev ${PACKAGE}

composer-remove:
	./vendor/bin/sail composer remove ${PACKAGE}

composer-remove-dev:
	./vendor/bin/sail composer remove --dev ${PACKAGE}

artisan:
	./vendor/bin/sail artisan ${COMMAND}