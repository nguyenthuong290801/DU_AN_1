<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class User_Review implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_review', function (Blueprint $table) {
            $table->id();
            $table->integer('rating_value');
            $table->text('comment');
            $table->integer('user_id');
            $table->integer('ordered_product_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id', 'site_user');
            $table->foreignId('ordered_product_id', 'order_line');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('user_review');
    }

}
