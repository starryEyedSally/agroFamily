<?php

namespace Agrofamily;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'sku', 'unit_of_measure'
    ];

    public function loadAttributes(){
        return $this
            ->belongsToMany(
                'Agrofamily\Attribute', 'attributes_products_users', 'product_id', 'attribute_id');
    }

    public function setAttributes($attributes){
        $this->attributes = $attributes;
    }
}
