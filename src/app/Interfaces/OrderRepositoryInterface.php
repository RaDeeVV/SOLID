<?php

namespace App\Interfaces;

use App\Domain\Order;

interface OrderRepositoryInterface
{
    public function save(Order $order);
    public function find($id);
}