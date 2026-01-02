<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    /**
     * Create a new class instance.
     */
    public function create(array $data)
    {
        // return Course::create($data);
        return Product::create([
            'title'         => $data['title'],
            'description'   => $data['description'],
            'level'         => $data['level'],
            'image'         => $data['image'],
        ]);
    }
}
