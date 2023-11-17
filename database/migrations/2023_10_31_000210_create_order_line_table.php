<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Order_Line implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('order_line', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->float('price');
            $table->integer('product_detail_id');
            $table->integer('order_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('product_detail_id', 'product_detail');
            $table->foreignId('order_id', 'shop_order');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('order_line');
    }

}
