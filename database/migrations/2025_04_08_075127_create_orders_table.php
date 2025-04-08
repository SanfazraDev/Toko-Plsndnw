<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('discount')->nullable();
            $table->unsignedBigInteger('total');
            $table->unsignedBigInteger('profit')->nullable();
            $table->enum('order_status', ["pending","waiting","completed","cancelled","delivered","ongoing","on_process"]);
            $table->enum('payment_status', ["paid","unpaid","refunded","cancelled","pending","failed"]);
            $table->timestamp('payment_date')->nullable();
            $table->timestamp('order_date')->nullable();
            $table->enum('payment_method', ["cash","transfer"])->default("cash")->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
