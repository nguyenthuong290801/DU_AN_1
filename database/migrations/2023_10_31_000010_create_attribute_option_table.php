<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Attribute_Option implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('attribute_option', function (Blueprint $table) {
            $table->id();
            $table->integer('product_category_id');
            $table->string('attribute_name');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('product_category_id', 'product_category');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_option');
    }

}
