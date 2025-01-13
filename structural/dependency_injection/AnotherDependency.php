<?php

require_once("DependencyInterface.php");

class AnotherDependency implements DependencyInterface {

    private string $name = 'This is another dependency injection';

    public function getName(): string {
        return $this->name;
    }

}