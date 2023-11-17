<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Order_Status implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('order_status', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('order_status');
    }

}
