<?php

declare(strict_types=1);


namespace HexaShoppingCart\Cart\Command;


use HexaShoppingCart\Cart\Infrastructure\Repository\ProductRepositoryContract;
use HexaShoppingCart\General\Handler;

class DeleteProductHandler extends Handler
{
    private ProductRepositoryContract $productRepository;

    public function __construct(ProductRepositoryContract $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function handle(DeleteProductCommand $deleteProductCommand): void
    {
        $this->productRepository->delete($deleteProductCommand->getId());
    }
}