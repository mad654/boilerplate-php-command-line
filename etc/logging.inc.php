<?php

# init monolog handlers
# @see https://github.com/Seldaek/monolog
# @see https://github.com/Seldaek/monolog/blob/master/doc/01-usage.md#log-levels

/* @var \Monolog\Logger $logger */
use Monolog\Processor\MemoryPeakUsageProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use Monolog\Processor\ProcessIdProcessor;
use Monolog\Processor\PsrLogMessageProcessor;

/* @var string $logDir */
/* @var string $logFileName */

$logger->pushHandler(new \Monolog\Handler\StreamHandler(
    "$logDir/$logFileName.debug.log",
    \Monolog\Logger::DEBUG)
);


$logger->pushProcessor(new PsrLogMessageProcessor());
$logger->pushProcessor(new ProcessIdProcessor());
$logger->pushProcessor(new MemoryUsageProcessor());
$logger->pushProcessor(new MemoryPeakUsageProcessor());
