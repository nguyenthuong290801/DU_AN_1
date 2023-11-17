<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Shopping_Cart implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id', 'site_user');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_cart');
    }

}
