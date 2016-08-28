<?php

// List of active command instances
// which are subclasses of `\Symfony\Component\Console\Command\Command`

// you can push a logger to your commands constructor
/* @var \Monolog\Logger $logger */

return [
    new \Example\Console\HelloWorldCommand($logger->withName($logger->getName() . '.HELLO_WORLD'))
];
