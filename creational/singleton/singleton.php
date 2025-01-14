<?php

// this is a generic interface for a Singleton pattern
interface SingletonInterface
{
    public static function getInstance(): self;
    public function __clone();
    public function __wakeup();
}

// this class represents a common Singleton pattern
class Singleton implements SingletonInterface
{
    private static ?self $instance = null;
    private string $name; // for example

    protected function __construct() {}

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    final public function __clone() {}

    final public function __wakeup() {}

    // for example
    public function getName(): string
    {
        return $this->name . PHP_EOL;
    }

    // for example
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

// here I create a new instance of Singleton class
$instance1 = Singleton::getInstance();
$instance1->setName('Instance #1');
var_dump($instance1->getName()); // Instance #1

// all other new objects will contain the same instance
$instance2 = Singleton::getInstance();
var_dump($instance2->getName()); // the same instance