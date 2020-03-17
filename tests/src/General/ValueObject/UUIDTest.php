<?php

namespace Test\HexaShoppingCart\General\Helper;

use HexaShoppingCart\General\ValueObject\UUID;
use PHPUnit\Framework\TestCase;

class UUIDTest extends TestCase
{
    public function testShouldGenerateUUID()
    {
        $uuid = UUID::generate();

        $this->assertTrue($this->isValid($uuid));
        $this->assertIsString($uuid);
    }

    public function testShouldCreateUUIDFromString()
    {
        $stringUUID = UUID::generate();
        $uuid = new UUID($stringUUID);

        $this->assertEquals($stringUUID, $uuid->toString());
        $this->assertTrue($this->isValid($uuid->toString()));
    }

    public function testShouldCreateUUID()
    {
        $uuid = new UUID();

        $this->assertTrue($this->isValid($uuid->toString()));
    }

    public function testShouldConvertUUIDToString()
    {
        $stringUuid = 'eb3d5415-655d-4462-adbe-36058af11fd0';
        $uuid = new UUID($stringUuid);

        $this->assertEquals($uuid->toString(), $stringUuid);
    }

    //TODO: expect exception on invalid

    private function isValid(string $uuid): bool
    {
        return \Ramsey\Uuid\Uuid::isValid($uuid);
    }
}