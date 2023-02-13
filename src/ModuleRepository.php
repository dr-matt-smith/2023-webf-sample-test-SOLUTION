<?php

namespace Tudublin;

class ModuleRepository
{
    private  $objects = [];

    public function __construct()
    {
        $fixtures = new DataFixtures();
        $this->objects = $fixtures->getObjects();
    }

    public function findAll()
    {
        return $this->objects;
    }

    public function find(int $id)
    {
        return $this->objects[$id];
    }
}