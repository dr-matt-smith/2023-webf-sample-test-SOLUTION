<?php

namespace Tudublin;

class Module
{
    private int $id;
    private string $name;
    private int $year;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function __toString(): string
    {
        return "$this->id: $this->name, year $this->year";
    }
}