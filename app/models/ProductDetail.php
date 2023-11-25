<?php

namespace App\models;

use Illuminate\framework\base\Model;

class ProductDetail extends Model
{
    protected $table = 'product_detail';

    protected $columns = [
        'id',
        'product_id',
        'price',
        'qty_in_stock',
        'detail',
    ];
}