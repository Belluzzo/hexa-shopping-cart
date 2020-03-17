<?php

declare(strict_types=1);

namespace HexaShoppingCart\General\ValueObject;

use Ramsey\Uuid\UuidInterface;

final class UUID
{
    private UuidInterface $uuid;

    public function __construct(?string $uuid = null)
    {
        if (\Ramsey\Uuid\Uuid::isValid($uuid)) {
            //TODO: throw exception if is invalid uuid
            $uuid = \Ramsey\Uuid\Uuid::fromString($uuid);
        }

        if (is_null($uuid)) {
            $uuid = \Ramsey\Uuid\Uuid::uuid4();
        }

        $this->uuid = $uuid;
    }

    public static function generate(): string
    {
        $instance = new self();

        return $instance->uuid->toString();
    }

    public function toString(): string
    {
        return strval($this);
    }

    public function __toString(): string
    {
       return $this->uuid->toString();
    }
}