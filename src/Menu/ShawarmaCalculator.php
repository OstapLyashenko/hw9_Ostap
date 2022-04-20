<?php

namespace Hillel\Menu;

class ShawarmaCalculator extends Shawarma
{
    protected float $sumPrice = 0;
    protected array $allIngredients = [];
    protected array $nameShawarma = [];

    public function add(Shawarma $shawarma): void
    {
        $this->nameShawarma[] = $shawarma->getTitle();
        $this->sumPrice += $shawarma->getCost();
        $this->allIngredients = array_unique(array_merge($this->allIngredients, $shawarma->getIngredients()));
    }

    public function titles(): array
    {
        return $this->nameShawarma;
    }

    public function ingredients(): array
    {
        return $this->allIngredients;
    }

    public function price(): float
    {
        return $this->sumPrice;
    }
}