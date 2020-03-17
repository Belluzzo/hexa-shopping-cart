<?php

declare(strict_types=1);


namespace HexaShoppingCart\Cart\Command;


use HexaShoppingCart\Cart\Infrastructure\Presenter\ProductPresenterContract;
use HexaShoppingCart\Cart\Infrastructure\Repository\ProductRepositoryContract;
use HexaShoppingCart\General\Handler;

class ListProductHandler extends Handler
{
    private ProductRepositoryContract $productRepository;
    private ProductPresenterContract $productPresenter;

    public function __construct(ProductRepositoryContract $productRepository, ProductPresenterContract $productPresenter)
    {
        $this->productRepository = $productRepository;
    }

    public function handle(ListProductCommand $listProductCommand)
    {
        $products = $this->productRepository->getAll();
        $this->productPresenter->list($products);
    }
}