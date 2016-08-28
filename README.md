# boilerplate-php-command-line
Provide easy to use boilerplate for php cli application

## Usage

```
bin/app --help
```

### Add new commands

1. Create a command which extends `Symfony\Component\Console\Command\Command`
2. Register namespace in `autoload` section of `composer.json`
3. Register command in `etc/commands.inc.php`

More details on symfony-console: http://symfony.com/doc/current/components/console.html

### Add new configuration parameters
1. If required or have enum like values: add it `etc/config_requirements.inc.php`
2. Add it in `etc/config.example`
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
See a example in `src/Example/Environment.php`

## Roadmap
- [DONE] integrate symfony-console
- integrate .env: feature/mad654/env-integration
- integrate monologger
- add support for aspects
- add support for design by contract
- add support for php unit
