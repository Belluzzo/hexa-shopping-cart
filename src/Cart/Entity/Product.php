<?php


namespace HexaShoppingCart\Cart\Entity;


use HexaShoppingCart\General\ValueObject\UUID;

class Product
{
    private UUID $id;
    private string $name;
    private float $price;

    public function __construct(string $name, float $price, UUID $id)
    {
        $this->name = $name;
        $this->price = $price;
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getId(): UUID
    {
        return $this->id;
    }
}