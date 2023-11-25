<?php

namespace App\models;

use Illuminate\framework\base\Model;

class VariationOption extends Model
{
    protected $table = 'variation_option';

    protected $columns = [
        'id',
        'variation_id',
        'value',
    ];
}