# boilerplate-php-command-line
Provide easy to use boilerplate for php cli application

## Usage

```
git clone git@github.com:mad654/boilerplate-php-command-line.git sample-project
cd sample-project
make
make test

# or call it directly
bin/app --help
```

### Add new commands

1. Create a command which extends `Symfony\Component\Console\Command\Command`
2. Register namespace in `autoload` section of `composer.json`
3. Register command in [etc/commands.inc.php](etc/commands.inc.php)

More details on symfony-console: http://symfony.com/doc/current/components/console.html

### Add new configuration parameters
1. If required or have enum like values: add it [etc/config_requirements.inc.php](etc/config_requirements.inc.php)
2. Add it in [etc/config.example](etc/config.example)
3. copy `etc/config.example` to `etc/config` by simply

   ```
   make
   ```

4. use it like this

   ```
   <?php
   $appName = getenv('APP_NAME')
   ?>
   ```

More details on .env: https://github.com/vlucas/phpdotenv#usage

**NOTE: you should abstract access to `getenv` calls by a class.**
See a example in [src/Example/Environment.php](src/Example/Environment.php)

### Configure logging

You have full control over all logging settings provided by monolog.
Make your changes in [etc/logging.inc.php](etc/logging.inc.php).

More details on monolog: https://github.com/Seldaek/monolog

#### Preconfigured defaults

The following handlers are configured by default:
 - finger-crossed console logging to `STDOUT` based on `APP_LOG_LEVEL`
   in `etc/config`
 - log all to '`APP_LOG_DIR`/`APP_NAME`.debug.log'
 - finger-crossed logging to '`APP_LOG_DIR`/`APP_NAME`.error.log'

The following processors are configured by default:
 - PsrLogMessageProcessor
 - ProcessIdProcessor
 - MemoryUsageProcessor
 - MemoryPeakUsageProcessor

**NOTE: -q -v -vv -vvv have no effect on the console logger**

## Roadmap
- [DONE] integrate symfony-console
- [DONE] integrate .env: feature/mad654/env-integration
- [DONE] integrate monologger: feature/mad654/logger-integration
- add support for multiple channel loggers: https://github.com/mad654/ga-php/pull/3/commits/61fdf7113609c5a5084aa346edfd3a7886a24baa
- add support for aspects
- add support for design by contract
- add support for php unit

### Other ideas
- make finger-crossed console logging configurable
- extract app-{name,version} from etc/config
- add make targets: release.prepare
- add make targets: dev.feature
- connect console logger to symfony-consle -vvv option
