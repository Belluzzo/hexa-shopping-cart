<?php

declare(strict_types=1);


namespace HexaShoppingCart\Tests\Cart\Command;


use HexaShoppingCart\Cart\Command\DeleteProductCommand;
use HexaShoppingCart\Cart\Command\DeleteProductHandler;
use HexaShoppingCart\Cart\Entity\Product;
use HexaShoppingCart\General\ValueObject\UUID;
use HexaShoppingCart\Tests\Cart\Infrastructure\Repository\ProductInMemoryRepository;
use PHPUnit\Framework\TestCase;

class DeleteProductHandlerTest extends TestCase
{
    public function testShouldRemoveProduct()
    {
        $id = new UUID('9ce35fd8-3299-4abd-b078-fcf61ee2a0e3');

        $product = new Product('Product 1', 15.50, $id);
        $productRepository = new ProductInMemoryRepository();
        $productRepository->save($product);

        $deleteProductCommand = new DeleteProductCommand($id);
        $deleteProductHandler = new DeleteProductHandler($productRepository);
        $deleteProductHandler->handle($deleteProductCommand);

        $this->assertNull($productRepository->find($id));
    }
}