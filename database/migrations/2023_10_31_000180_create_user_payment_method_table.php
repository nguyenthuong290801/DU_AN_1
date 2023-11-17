<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class User_Payment_Method implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_payment_method', function (Blueprint $table) {
            $table->id();
            $table->string('provider');
            $table->string('account_number');
            $table->date('expiry_date');
            $table->boolean('is_default');
            $table->integer('user_id');
            $table->integer('payment_type_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id', 'site_user');
            $table->foreignId('payment_type_id', 'payment_type');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('user_payment_method');
    }

}
