<?php

declare(strict_types=1);

namespace HexaShoppingCart\Cart\Infrastructure\Repository;


use HexaShoppingCart\Cart\Entity\Product;
use HexaShoppingCart\General\ValueObject\UUID;

interface ProductRepositoryContract
{
    public function save(Product $product): void;

    public function find(UUID $id): ?Product;

    public function delete(UUID $id): void;

    public function getAll(): array;
}