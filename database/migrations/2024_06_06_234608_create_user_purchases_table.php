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
        Schema::create('user_purchases', function (Blueprint $table) {
            $table->id();

            $table->string('state');
            $table->string("type_buy")->nullable();
            $table->unsignedBigInteger("user_id")->unique();

            $table->unsignedBigInteger("product_id")->unique();

            $table->foreign("user_id")->references("id")->on("users");

            $table->foreign("product_id")->references("id")->on("products");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_purchases');
    }
};
