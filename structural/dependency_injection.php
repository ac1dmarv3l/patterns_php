<?php

/**
 * this is a common interface for all dependencies
 */
interface DependencyInterface
{
    public function getName(): string;
}

/**
 * this class represents a dependency class
 */
class Dependency implements DependencyInterface
{
    private string $name = 'This is a dependency injection';

    public function getName(): string
    {
        return $this->name;
    }
}

/**
 * this class represents another dependency
 */
class AnotherDependency implements DependencyInterface
{
    private string $name = 'This is another dependency injection';

    public function getName(): string
    {
        return $this->name;
    }
}

/**
 * this handler class receives any dependency class that implements DependencyInterface
 */
class DependencyHandler
{
    private DependencyInterface $dependency;

    public function __construct(DependencyInterface $dependency)
    {
        $this->dependency = $dependency;
    }

    public function getDependencyName(): string
    {
        return $this->dependency->getName();
    }
}

/**
 * the example shows how to pass a dependency class as a parameter to the handler class
 */
$handler = new DependencyHandler(new Dependency());
var_dump($handler->getDependencyName());

/**
 * it can receive any class that implements an appropriate interface
 */
$anotherHandler = new DependencyHandler(new AnotherDependency());
var_dump($anotherHandler->getDependencyName());