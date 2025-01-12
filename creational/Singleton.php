<?php

interface SingletonInterface {
    public static function getInstance(): self;
    public function __clone();
    public function __wakeup();
}

class Singleton implements SingletonInterface {

    private static ?self $instance = null;
    private string $name;

    protected function __construct() {}

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    final public function __clone() {}
    final public function __wakeup() {}

}

$instance1 = Singleton::getInstance();
$instance1->setName('Instance #1' . PHP_EOL);
var_dump($instance1->getName());
$instance2 = Singleton::getInstance();
var_dump($instance2->getName());