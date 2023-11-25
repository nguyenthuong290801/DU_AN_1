<?php

namespace App\models;

use Illuminate\framework\base\Model;

class AttributeOption extends Model
{
    protected $table = 'attribute_option';

    protected $columns = [
        'id',
        'product_category_id',
        'attribute_name',
    ];
}