<?php

if (false === class_exists('\\Composer\\Autoload\\ClassLoader')) {
    require_once __DIR__ . "/../vendor/autoload.php";
}

use Symfony\Component\Console\Application;

$console = new Application();
$console->addCommands(array(
    new Doctrine\CodeGenerator\Command\GenerateCommand(),
));
$console->run();

