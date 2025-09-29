<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_games_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('developer');
            $table->text('description')->nullable();
            $table->string('category');
            $table->decimal('topup_rate', 8, 2)->default(1.0);
            $table->boolean('is_active')->default(true);
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
};