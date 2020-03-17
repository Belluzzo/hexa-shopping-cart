<?php

declare(strict_types=1);


namespace HexaShoppingCart\Tests\Cart\Command;


use HexaShoppingCart\Cart\Command\AddProductToCartCommand;
use PHPUnit\Framework\TestCase;

class AddProductToCartCommandTest extends TestCase
{
    public function testShouldAddProductToCartCommand()
    {
        $id = '';
        $product = '';

        $addProductToCartCommand = new AddProductToCartCommand($product, $id);
        $this->assertEquals($id, $addProductToCartCommand->getId());
        $this->assertEquals($product, $addProductToCartCommand->getProduct());
    }
}