# Changes for *boilerplate-php-command-line*

- Fixed Makefile: no rule for composer.lock
- integrate monologger
- integrate .env support via `vlucas/phpdotenv`
- integrate `symfony/console` and provide a application startpoint

  Start the app via:
  ```
  bin/app
  ```

  Register new commands in `etc/commands.inc.php`.
