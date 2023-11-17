<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Promotion_Category implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('promotion_category', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('promotion_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('category_id', 'product_category');
            $table->foreignId('promotion_id', 'promotion');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_category');
    }

}
