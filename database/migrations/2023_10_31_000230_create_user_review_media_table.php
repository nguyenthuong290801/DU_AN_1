<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class User_Review_Media implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_review_media', function (Blueprint $table) {
            $table->id();
            $table->integer('user_review_id');
            $table->string('type');
            $table->string('url');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_review_id', 'user_review');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('user_review_media');
    }

}
