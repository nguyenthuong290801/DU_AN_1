<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Country implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('country');
    }

}
