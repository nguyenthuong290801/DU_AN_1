<?php

namespace App\models;

use Illuminate\framework\base\Model;

class ProductConfiguration extends Model
{
    protected $table = 'product_configuration';

    protected $columns = [
      'product_detail_id',
      'variation_option_id',
    ];
}