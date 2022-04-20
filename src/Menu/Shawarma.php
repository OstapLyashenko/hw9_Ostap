<?php

namespace Hillel\Menu;

class Shawarma
{
    protected float $price;
    protected array $ingredients;
    protected string $name;

    protected function getCost(): float
    {
        return $this->price;
    }

    protected function getIngredients(): array
    {
        return $this->ingredients;
    }

    protected function getTitle(): string
    {
        return $this->name;
    }
}
