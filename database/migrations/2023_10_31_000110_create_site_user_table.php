<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Site_User implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('site_user', function (Blueprint $table) {
            $table->id();
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('site_user');
    }

}
