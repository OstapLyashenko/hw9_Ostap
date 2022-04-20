<?php

namespace Hillel\Menu;

class Baranina extends Shawarma
{
    protected float $price = 85;
    protected array $ingredients = ['чесночный соус', 'говяжий окорок', 'огурцы маринованные', 'маринованный лук с барбарисом и зеленью',
        'салат коул слоу', 'тандырный лаваш', 'помидоры свежие', 'хумус', 'соус тахин'];
    protected string $name = 'Шаурма из Баранины';

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