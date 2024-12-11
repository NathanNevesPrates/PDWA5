<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pudims', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tamanho', 1);
            $table->string('sabor', 64);
            $table->string('custo', 64);
            $table->string('marca', 64);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pudims');
    }
};
