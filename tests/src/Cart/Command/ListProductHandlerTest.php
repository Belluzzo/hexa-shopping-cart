<?php

declare(strict_types=1);


namespace HexaShoppingCart\Tests\Cart\Command;


use HexaShoppingCart\Cart\Command\ListProductCommand;
use HexaShoppingCart\Cart\Command\ListProductHandler;
use HexaShoppingCart\Cart\Entity\Product;
use HexaShoppingCart\Cart\Infrastructure\Presenter\ProductPresenter;
use HexaShoppingCart\General\ValueObject\UUID;
use HexaShoppingCart\Tests\Cart\Infrastructure\Repository\ProductInMemoryRepository;
use PHPUnit\Framework\TestCase;

class ListProductHandlerTest extends TestCase
{
    public function testShouldListProducts()
    {
        $listProductCommand = new ListProductCommand();
        $productRepository = new ProductInMemoryRepository();
        $productPresenter = new ProductPresenter();

        $id = new UUID();
        $product = new Product('Product 1', 9.99, $id);

        $id = new UUID();
        $product = new Product('Product 2', 954.99, $id);

        $listProductHandler = new ListProductHandler($productRepository, $productPresenter);
        $listProductHandler->handle($listProductCommand);

        //$this->assertStringContainsString();
    }
}