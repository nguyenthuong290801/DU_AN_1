<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Shipping_Method implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('shipping_method', function (Blueprint $table) {
            $table->id();
            $table->float('weight');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->string('name');
            $table->float('price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_method');
    }

}
