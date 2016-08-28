<?php

# init monolog handlers
# @see https://github.com/Seldaek/monolog
# @see https://github.com/Seldaek/monolog/blob/master/doc/01-usage.md#log-levels

/* @var \Monolog\Logger $logger */
/* @var string $logDir */
/* @var string $logFileName */

$logger->pushHandler(new \Monolog\Handler\StreamHandler(
    "$logDir/$logFileName.debug.log",
    \Monolog\Logger::DEBUG)
);
