<?php

namespace Hillel\Menu;

class ShawarmaOdessa extends Shawarma
{
    protected float $price = 69;
    protected array $ingredients = ['огурцы маринованные', 'картофель жареный', 'чесночный соус', 'тандырный лаваш',
        'маринованный лук с барбарисом и зеленью', 'мясо куриное', 'салат коул слоу', 'корейская морковь'];
    protected string $name = 'Шаурма Одесская';

    public function getCost(): float
    {
        return $this->price;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getTitle(): string
    {
        return $this->name;
    }
}