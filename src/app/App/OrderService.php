<?php

namespace App\App;

use App\Domain\Order;
use App\Interfaces\OrderRepositoryInterface;

class OrderService
{
    private $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function saveOrder(Order $order)
    {
        $this->orderRepository->save($order);
    }

    public function findOrder($id)
    {
        return $this->orderRepository->find($id);
    }
}