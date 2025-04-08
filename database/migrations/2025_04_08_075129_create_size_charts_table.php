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

        Schema::create('size_charts', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->enum('size', ["xs","s","m","l","xl","xxl","xxxl","xxxxl"])->nullable();
            $table->string('pinggang')->nullable();
            $table->string('pinggul')->nullable();
            $table->string('paha')->nullable();
            $table->string('kaki')->nullable();
            $table->string('panjang')->nullable();
            $table->string('lebar')->nullable();
            $table->string('lengan')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('size_charts');
    }
};
