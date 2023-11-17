<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Address implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->integer('unit_number');
            $table->integer('street_number');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('city');
            $table->string('region');
            $table->string('postal_code');
            $table->integer('country_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('country_id', 'country');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }

}
