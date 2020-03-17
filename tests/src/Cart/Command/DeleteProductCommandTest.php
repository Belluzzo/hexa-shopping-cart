<?php

declare(strict_types=1);


namespace HexaShoppingCart\Tests\Cart\Command;


use HexaShoppingCart\Cart\Command\DeleteProductCommand;
use HexaShoppingCart\General\ValueObject\UUID;
use PHPUnit\Framework\TestCase;

class DeleteProductCommandTest extends TestCase
{
    public function testShouldCreateRemoveProductCommand()
    {
        $id = '9ce35fd8-3299-4abd-b078-fcf61ee2a0e3';
        $id = new UUID($id);

        $deleteProductCommand = new DeleteProductCommand($id);

        $this->assertEquals($id, $deleteProductCommand->getId());
    }
}