
build: vendor etc/config

vendor: composer.json composer.lock
	@composer install

etc/config: etc/config.example
	@cp -v etc/config.example etc/config
	@echo
	@echo Updated etc/config file - please check and adjust your settings
