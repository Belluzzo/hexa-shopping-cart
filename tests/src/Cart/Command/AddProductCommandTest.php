<?php

namespace Tests\HexaShoppingCart\ShoppingCart;

use HexaShoppingCart\Cart\Command\AddProductCommand;
use HexaShoppingCart\General\ValueObject\UUID;
use PHPUnit\Framework\TestCase;

class AddProductCommandTest extends TestCase
{
    public function testShouldCreateAddProductCommandWithoutIdParam()
    {
        $name = 'Product';
        $price = 9.99;

        $productCommand = new AddProductCommand($name, $price);

        $this->assertEquals($productCommand->getName(), $name);
        $this->assertEquals($productCommand->getPrice(), $price);
        $this->assertTrue(\Ramsey\Uuid\Uuid::isValid($productCommand->getId()));
    }

    public function testShouldCreateAddProductCommandWithIdParam()
    {
        $name = 'Product';
        $price = 9.99;
        $uuid = '9ff537c8-8767-4533-a498-ec542e557d2d';
        $id = new UUID($uuid);

        $productCommand = new AddProductCommand($name, $price, $id);

        $this->assertEquals($productCommand->getName(), $name);
        $this->assertEquals($productCommand->getPrice(), $price);
        $this->assertEquals($productCommand->getId()->toString(), $uuid);
    }
}