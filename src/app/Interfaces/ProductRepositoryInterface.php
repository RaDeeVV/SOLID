<?php

namespace App\Interfaces;

use App\Domain\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product);
    public function find($id);
}