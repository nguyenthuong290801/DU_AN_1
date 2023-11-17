<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Promotion implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('discount_rate');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion');
    }

}
