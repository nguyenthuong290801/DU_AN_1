<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Product_Detail implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('product_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->float('price');
            $table->float('qty_in_stock');
            $table->json('detail');
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
        Schema::dropIfExists('product_detail');
    }

}
