<?php
namespace Agrofamily;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AttributeValues extends Pivot
{
    protected $table = 'attributes_products_users';

    protected $fillable = [
        'value'
    ];
}
