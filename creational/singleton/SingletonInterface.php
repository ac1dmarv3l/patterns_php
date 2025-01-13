<?php

interface SingletonInterface {

    public static function getInstance(): self;
    public function __clone();
    public function __wakeup();

}