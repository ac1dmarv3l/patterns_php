<?php

require_once "Singleton.php";

$instance1 = Singleton::getInstance();
$instance1->setName('Instance #1' . PHP_EOL);
var_dump($instance1->getName()); // Instance #1

$instance2 = Singleton::getInstance();
var_dump($instance2->getName()); // the same instance