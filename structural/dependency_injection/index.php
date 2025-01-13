<?php

require_once 'Dependency.php';
require_once 'AnotherDependency.php';
require_once 'DependencyHandler.php';

$handler = new DependencyHandler(new Dependency());
var_dump($handler->getDependencyName());

$anotherHandler = new DependencyHandler(new AnotherDependency());
var_dump($anotherHandler->getDependencyName());