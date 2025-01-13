<?php

require_once 'DependencyInterface.php';

class Dependency implements DependencyInterface {

    private string $name = 'This is dependency injection';

    public function getName(): string {
        return $this->name;
    }

}