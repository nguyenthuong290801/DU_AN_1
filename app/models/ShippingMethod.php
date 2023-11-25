<?php

namespace App\models;

use Illuminate\framework\base\Model;

class ShippingMethod extends Model
{
    protected $table = 'shipping_method';

    protected $columns = [
        'id',
        'weight',
        'length',
        'width',
        'height',
        'name',
        'price',
        'product_id',
    ];
}