<?php

declare(strict_types=1);

namespace HexaShoppingCart\Cart\Command;

use HexaShoppingCart\General\Command;
use HexaShoppingCart\General\ValueObject\UUID;

class AddProductCommand extends Command
{
    private string $name;
    private float $price;
    private UUID $id;

    public function __construct(string $name, float $price, ?UUID $id = null)
    {
        if (is_null($id)) {
            $id = new UUID();
        }

        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
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