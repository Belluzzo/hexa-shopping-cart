<?php

declare(strict_types=1);


namespace HexaShoppingCart\Cart\Command;


use HexaShoppingCart\General\Command;
use HexaShoppingCart\General\ValueObject\UUID;

class DeleteProductCommand extends Command
{
    private UUID $id;

    public function __construct(UUID $id)
    {
        $this->id = $id;
    }

    public function getId(): UUID
    {
        return $this->id;
    }
}