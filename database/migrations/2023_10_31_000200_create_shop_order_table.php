<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Shop_Order implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('shop_order', function (Blueprint $table) {
            $table->id();
            $table->date('order_date');
            $table->float('order_total');
            $table->integer('user_id');
            $table->integer('payment_method_id');
            $table->integer('shipping_address_id');
            $table->integer('shipping_method_id');
            $table->integer('order_status_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id', 'site_user');
            $table->foreignId('payment_method_id', 'user_payment_method');
            $table->foreignId('shipping_address_id', 'address');
            $table->foreignId('shipping_method_id', 'shipping_method');
            $table->foreignId('order_status_id', 'order_status');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_order');
    }

}
