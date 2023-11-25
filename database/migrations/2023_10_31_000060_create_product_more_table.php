<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Product_More implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('product_more', function (Blueprint $table) {
            $table->id();
            $table->integer('pre_order');
            $table->string('status');
            $table->string('SKU');
            $table->integer('product_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('product_id', 'product');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('product_more');
    }

}
