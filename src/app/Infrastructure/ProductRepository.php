<?php

namespace App\Infrastructure;

use App\Domain\Product;
use App\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    private $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function save(Product $product)
    {
        $this->products[$product->getId()] = $product;
    }

    public function find($id)
    {
        return $this->products[$id] ?? null;
    }
}