<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class User_Address implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_address', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('address_id');
            $table->boolean('is_default');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id', 'site_user');
            $table->foreignId('address_id', 'address');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('user_address');
    }

}
