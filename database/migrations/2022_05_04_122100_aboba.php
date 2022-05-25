<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->boolean('is_blocked')->default(false);
            $table->string('phone_number')->nullable();
            $table->dateTime('registration_date')->default(\Carbon\Carbon::now());
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->string('street');
            $table->string('house');
            $table->string('floor');
            $table->string('flat');
            $table->string('code');
            $table->dateTime('created_at')->default(\Carbon\Carbon::now());
            $table->integer('buyer_id');
            $table->foreign('buyer_id')
                ->references('id')->on('buyers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('buyers');
    }
};
