<?php

namespace App\models;

use Illuminate\framework\base\Model;

class AttributeOptionValue extends Model
{
    protected $table = 'attribute_option_value';

    protected $columns = [
        'id',
        'attribute_option_id',
        'value',
    ];
}