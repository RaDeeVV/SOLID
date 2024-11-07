<?php

require_once 'vendor/autoload.php';

use App\App\OrderService;
use App\Domain\Order;
use App\Infrastructure\OrderRepository;

$orderRepository = new OrderRepository();
$orderService = new OrderService($orderRepository);

$order = new Order(1, 1, ['product1', 'product2']);
$orderService->saveOrder($order);

$retrievedOrder = $orderService->findOrder(1);
var_dump($retrievedOrder);