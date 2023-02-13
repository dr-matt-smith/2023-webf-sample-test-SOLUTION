<?php

namespace Tudublin;

class ShoppingList
{
    private string $name;
    private array $list = [
        'bread', 'eggs', 'milk'
    ];
    private string $lastError = 'none';

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function setName(string $name): bool
    {
        $this->name = $name;

        if(empty($name)){
            $this->lastError = 'empty name given';
            return false;
        }

        return true;
    }



    public function getName(): string
    {
        return $this->name;
    }

    public function getList(): array
    {
        return $this->list;
    }

    public function getNumItems(): int
    {
        return count($this->list);
    }

    public function removeAllItems(): void
    {
        $this->list = [];
    }

    public function getFirstItem(): string
    {
        if(empty($this->list)){
            throw new \Exception("no first item of an EMPTY array!");
        }
        return $this->list[0];
    }

   public function getLastError(): string
    {
        return $this->lastError;
    }

    public function addToList(string $item): bool
    {
        $this->list[] = $item;
        if(empty($item)){
            $this->lastError = 'empty item name';
            return false;
        }

        return true;

    }



}