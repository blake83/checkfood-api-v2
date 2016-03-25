<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'categories_id', 'id');
    }

    /**
     * @return int
     */
    public function totalProducts()
    {
        $this->attributes['total_products'] = count($this->products()->getResults());
    }
}