<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Payment_Type implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('payment_type', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_type');
    }

}
