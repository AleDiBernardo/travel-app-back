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

        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('viaggio_id');
            $table->foreign('viaggio_id')->references('id')->on('trips')->cascadeOnDelete();
            $table->string('immagine')->nullable();
            $table->date('data');
            $table->string('titolo');
            $table->text('descrizione')->nullable();
            $table->decimal('longitudine');
            $table->decimal('latitudine');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
