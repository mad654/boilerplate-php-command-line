<?php

// List of active command instances
// which are subclasses of `\Symfony\Component\Console\Command\Command`

// you can push a logger to your commands constructor
/* @var \Psr\Log\LoggerInterface $logger */

return [
    new \Example\Console\HelloWorldCommand($logger)
];
