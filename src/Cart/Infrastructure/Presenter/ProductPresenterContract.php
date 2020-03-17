<?php

declare(strict_types=1);


namespace HexaShoppingCart\Cart\Infrastructure\Presenter;


interface ProductPresenterContract
{
    public function list(array $products): void;
}