<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Product_Configuration implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('product_configuration', function (Blueprint $table) {
            $table->integer('product_detail_id');
            $table->integer('variation_option_id');
            $table->integer('shipping_method_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('product_detail_id', 'product_detail');
            $table->foreignId('variation_option_id', 'variation_option');
            $table->foreignId('shipping_method_id', 'shipping_method');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('product_configuration');
    }

}
