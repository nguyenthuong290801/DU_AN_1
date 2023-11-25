<?php

namespace App\models;

use Illuminate\framework\base\Model;

class ProductMedia extends Model
{
    protected $table = 'product_media';

    protected $columns = [
        'id',
        'product_id',
        'type',
        'url',
    ];
}