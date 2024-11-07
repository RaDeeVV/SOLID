<?php

namespace App\Infrastructure;

use App\Domain\Order;
use App\Interfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    private $orders;

    public function __construct()
    {
        $this->orders = [];
    }

    public function save(Order $order)
    {
        $this->orders[$order->getId()] = $order;
    }

    public function find($id)
    {
        return $this->orders[$id] ?? null;
    }
}