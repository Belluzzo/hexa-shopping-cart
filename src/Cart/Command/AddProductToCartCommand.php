<?php

declare(strict_types=1);


namespace HexaShoppingCart\Cart\Command;


use HexaShoppingCart\General\Command;
use HexaShoppingCart\General\ValueObject\UUID;

class AddProductToCartCommand extends Command
{
    private UUID $id;
    private UUID $product;

    public function __construct(UUID $product, UUID $id)
    {
        $this->product = $product;
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProduct()
    {
        return $this->product;
    }
}