<?php

namespace App\Domain;

class Order
{
    private $id;
    private $customerId;
    private $products;

    public function __construct($id, $customerId, array $products)
    {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->products = $products;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getProducts()
    {
        return $this->products;
    }
}