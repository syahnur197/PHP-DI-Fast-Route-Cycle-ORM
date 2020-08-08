<?php
/**
 * The bootstrap file creates and returns the container.
 */

use Whoops\Run;
use DI\ContainerBuilder;
use DebugBar\StandardDebugBar;
use Whoops\Handler\PrettyPageHandler;

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/config.php');
$container = $containerBuilder->build();

(new Run())->pushHandler(new PrettyPageHandler())->register();



return $container;
