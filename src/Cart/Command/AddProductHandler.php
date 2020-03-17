<?php

declare(strict_types=1);


namespace HexaShoppingCart\Cart\Command;


use HexaShoppingCart\Cart\Infrastructure\Repository\ProductRepositoryContract;
use HexaShoppingCart\Cart\Entity\Product;
use HexaShoppingCart\General\Handler;

class AddProductHandler extends Handler
{
    private ProductRepositoryContract $productRepository;

    public function __construct(ProductRepositoryContract $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function handle(AddProductCommand $command): void
    {
        $product = new Product($command->getName(), $command->getPrice(), $command->getId());

        $this->productRepository->save($product);
    }
}