<?php

namespace App\models;

use Illuminate\framework\base\Model;

class ProductMore extends Model
{
    protected $table = 'product_more';

    protected $columns = [
        'id',
        'pre_order',
        'status',
        'SKU',
        'product_id',
    ];
}