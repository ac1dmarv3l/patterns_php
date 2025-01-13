<?php

require_once 'SingletonInterface.php';

class Singleton implements SingletonInterface {

    private static ?self $instance = null;
    private string $name; // for the test example

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}