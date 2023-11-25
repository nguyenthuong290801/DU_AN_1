<?php

namespace App\models;

use Illuminate\framework\base\Model;

class Variation extends Model
{
    protected $table = 'variation';

    protected $columns = [
        'id',
        'name',
    ];
}