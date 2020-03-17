<?php

declare(strict_types=1);


namespace HexaShoppingCart\Tests\Cart\Command;


use HexaShoppingCart\Cart\Command\ListProductCommand;
use PHPUnit\Framework\TestCase;

class ListProductCommandTest extends TestCase
{
    public function testShouldCreateListProductCommand()
    {
        $listProductCommand = new ListProductCommand();
        $this->assertInstanceOf(ListProductCommand::class, $listProductCommand);
    }
}