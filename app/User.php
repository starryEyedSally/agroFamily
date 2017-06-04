<?php

namespace Agrofamily;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','opg_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getProducts(){
        $products = $this
            ->belongsToMany('Agrofamily\Product', 'products_users', 'user_id', 'product_id')
            ->get();

        /** @var \Agrofamily\Product $product */
        foreach ($products as $product) {
              $attributes = $product
                  ->loadAttributes()
                  ->wherePivot('user_id', $this->id)
                  ->withPivot('value')
                  ->get();
              $product->setAttributes($attributes);
        }
        return $products;
    }
}

