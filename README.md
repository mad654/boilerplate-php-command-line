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

## Roadmap
- [DONE] integrate symfony-console
- integrate .env: feature/mad654/env-integration
- integrate monologger
- add support for aspects
- add support for design by contract
- add support for php unit
