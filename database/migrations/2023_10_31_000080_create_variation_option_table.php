<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Variation_Option implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('variation_option', function (Blueprint $table) {
            $table->id();
            $table->integer('variation_id');
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('variation_id', 'variation');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('variation_option');
    }

}
