<?php

declare(strict_types=1);


namespace HexaShoppingCart\Tests\Cart\Infrastructure\Repository;


use HexaShoppingCart\Cart\Infrastructure\Repository\ProductRepositoryContract;
use HexaShoppingCart\Cart\Entity\Product;
use HexaShoppingCart\General\ValueObject\UUID;

class ProductInMemoryRepository implements ProductRepositoryContract
{
    private array $products;

    public function save(Product $product) : void
    {
        $id = $product->getId();
        $this->products[$id->toString()] = $product;
    }

    public function find(UUID $id): ?Product
    {
        return $this->products[$id->toString()] ?? null;
    }

    public function delete(UUID $id): void
    {
        unset($this->products[$id->toString()]);
    }
}