<?php

namespace App\Repositories;

use App\Models\Product;
use Housekeeper\Repository;
use Housekeeper\Action;

class ProductRepository extends Repository
{
    /**
     * Return the name of model that this repository used.
     *
     * @return string
     */
    protected function model()
    {
        return Product::class;
    }

    /**
     * This is just like the constructor.
     */
    public function boot()
    {
        //
    }
}
