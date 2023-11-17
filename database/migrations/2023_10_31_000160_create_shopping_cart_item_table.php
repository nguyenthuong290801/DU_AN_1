<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Shopping_Cart_Item implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('shopping_cart_item', function (Blueprint $table) {
            $table->id();
            $table->integer('cart_id');
            $table->integer('product_detail_id');
            $table->integer('qty');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('product_detail_id', 'product_detail');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_cart_item');
    }

}
