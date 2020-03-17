<?php

declare(strict_types=1);


namespace HexaShoppingCart\Tests\Cart\Command;

use HexaShoppingCart\Cart\Command\AddProductCommand;
use HexaShoppingCart\Cart\Command\AddProductHandler;
use HexaShoppingCart\General\ValueObject\UUID;
use HexaShoppingCart\Tests\Cart\Infrastructure\Repository\ProductInMemoryRepository;
use PHPUnit\Framework\TestCase;

class AddProductHandlerTest extends TestCase
{

    public function testShouldPersistProduct()
    {
        $name = 'Product 1';
        $price = 9.99;
        $id = new UUID('4dc70b67-e0a4-4b53-9499-ad75bc9c5728');

        $productInMemoryRepository = new ProductInMemoryRepository();
        $addProductCommand = new AddProductCommand($name, $price, $id);
        $addProductHandler = new AddProductHandler($productInMemoryRepository);
        $addProductHandler->handle($addProductCommand);

        $product = $productInMemoryRepository->find($id);

        $this->assertEquals($product->getId(), $id);
    }
}