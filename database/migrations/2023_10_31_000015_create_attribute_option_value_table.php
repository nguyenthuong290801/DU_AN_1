<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Attribute_Option_Value implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('attribute_option_value', function (Blueprint $table) {
            $table->id();
            $table->integer('attribute_option_id');
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('attribute_option_id', 'attribute_option');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_option_value');
    }

}
