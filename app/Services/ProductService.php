<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepostirory;
    /**
     * Create a new class instance.
     */
    public function __construct(ProductRepository $productRepository)
    {
         $this->productRepostirory = $productRepository;
    }

    public function create($data)
    {
        $product = $this->productRepostirory->create($data);

        return $product;
    }
}
