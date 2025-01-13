<?php

class DependencyHandler {

    private DependencyInterface $dependency;

    public function __construct(DependencyInterface $dependency) {
        $this->dependency = $dependency;
    }

    public function getDependencyName(): string {
        return $this->dependency->getName();
    }

}