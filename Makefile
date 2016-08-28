
build: vendor
	@bin/app

vendor: composer.json composer.lock
	@composer install
